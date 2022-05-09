<?php

class SexOffender
{
    public int $id;
    public int $national_id;
    public string $first_name;
    public string $last_name;
    public \DateTimeImmutable $date_of_birth;
    public string $gender;
    public string $occupation;
    public string $sexual_offence_committed;
    public int $year_in;
    public ?int $year_out;
    public int $years_served;

    public function __construct(
        int $id,
        int $national_id,
        string $first_name, 
        string $last_name, 
        DateTimeImmutable $date_of_birth,
        string $gender,
        string $occupation,
        string $sexual_offence_committed,
        int $year_in,
        ?int $year_out,
    )
    {
        $this->id = $id;
        $this->national_id = $national_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->date_of_birth = $date_of_birth;
        $this->gender = $gender;
        $this->occupation = $occupation;
        $this ->sexual_offence_committed = $sexual_offence_committed;
        $this->year_in = $year_in;
        $this->year_out = $year_out;
       $this->years_served =  ($year_out ??(int) date('Y'))- $year_in;
        }
}