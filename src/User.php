<?php

class User
{
	public int $id;
    public string $firstName;
    public string $lastName;
    public string $emailAddress;
    public string $password;



    public function __construct(
        int $id,
        string $firstName, 
        string $lastName, 
        string $emailAddress,
        string $password,
    )
    {
    	$this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->emailAddress = $emailAddress;
        $this->password = $password;
 }
}