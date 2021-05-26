<?php

class SexOffender
{
    public int $id;
    public int $national_id;
    public string $firstName;
    public string $lastName;
    public \DateTimeImmutable $dateOfBirth;
    public string $gender;
    public string $occupation;
    public string $sexualOffenceCommitted;
    public int $yearIn;
    public ?int $yearOut;
    public int $yearsServed;

    public function __construct(
        int $id,
        int $national_id,
        string $firstName, 
        string $lastName, 
        DateTimeImmutable $dateOfBirth,
        string $gender,
        string $occupation,
        string $sexualOffenceCommitted,
        int $yearIn,
        ?int $yearOut,
    )
    {
        $this->id = $id;
        $this->national_id = $national_id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->gender = $gender;
        $this->occupation = $occupation;
        $this ->sexualOffenceCommitted = $sexualOffenceCommitted;
        $this->yearIn = $yearIn;
        $this->yearOut = $yearOut;
       $this->yearsServed =  ($yearOut ??(int) date('Y'))- $yearIn;
        }
}