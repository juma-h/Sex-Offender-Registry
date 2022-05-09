<?php

class DatabaseService
{
    private const FORMAT = 'Y-m-d H:i:s';
    private mysqli $db;

    public function __construct(
        string $host = null,
        string $username = null,
        string $passwd = null,
        string $dbname = null,
        int $port = null,
        string $socket = null
    ) {
        $this->db = new mysqli($host, $username, $passwd, $dbname, $port, $socket);
    }

    /**
     * @return SexOffender[]
     */
    public function FetchSexOffenders(): array
    {
        $sql = "SELECT * FROM `sex_offenders`";
        $res = $this->db->query($sql) or die($this->db->error);
        $rows = $res->fetch_all(MYSQLI_ASSOC);

        if (count($rows) == 0) return $rows;

        $sexOffenders = [];
        foreach ($rows as $row)
            $sexOffenders[] = new SexOffender(
                $row['id'],
                $row['national_id'],
                $row['first_name'],
                $row['last_name'],
                new DateTimeImmutable($row['date_of_birth']),
                $row['gender'],
                $row['occupation'],
                $row['sexual_offence_committed'],
                $row['year_in'],
                $row['year_out'],
                
            );

        return $sexOffenders;
    }

    public function InsertSexOffender(SexOffender $sexOffender): void
    {   $national_id = $this->db->real_escape_string($sexOffender->national_id); 
        $first_name = $this->db->real_escape_string($sexOffender->first_name);
        $last_name = $this->db->real_escape_string($sexOffender->last_name);
        $date_of_birth = $this->db->real_escape_string($sexOffender->date_of_birth->format(self::FORMAT));
        $gender = $this->db->real_escape_string($sexOffender->gender);
        $occupation = $this->db->real_escape_string($sexOffender->occupation);
        $sexual_offence_committed = $this->db->real_escape_string($sexOffender->sexual_offence_committed);
        $year_in = $this->db->real_escape_string($sexOffender->year_in);
        $year_out = $this->db->real_escape_string($sexOffender->year_out);

        $sql = "INSERT INTO `sex_offenders` (`national_id`,`first_name`, `last_name`, `date_of_birth`, `gender`,`occupation`,`sexualOffenceCommitted`,`yearIn`,`yearOut`)".
            " VALUES ('{$national_id}','{$first_name}', '{$last_name}', '{$date_of_birth}','{$gender}','{$occupation}','{$sexual_offence_committed}','{$year_in}','{$year_out}')";
        $this->db->query($sql) or die($this->db->error);
    }

    public function authenticate(string $username, $password) : ?User
    {
       $username = $this->db-> real_escape_string($username);

       $sql = "SELECT * FROM `authorised_users` WHERE `email_address`= \"$username\" LIMIT 1";
       $res = $this ->db->query($sql) or die($this ->db->error);
        $rows = $res ->fetch_all(MYSQLI_ASSOC);

        if(count($rows)!== 1) return null;

        $row = $rows[0];

        if (password_verify( $password,$row['password'])) 
            return new User(

                $row['id'],
                $row['first_name'],
                $row['last_name'],
                $row['email_address'],
                $row['password'],

            );

        return null;
    }
}
