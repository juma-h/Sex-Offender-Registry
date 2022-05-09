<?php

class User
{
	public int $id;
    public string $first_name;
    public string $last_name;
    public string $email_address;
    public string $password;



    public function __construct(
        int $id,
        string $first_name, 
        string $last_name, 
        string $email_address,
        string $password,
    )
    {
    	$this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email_address = $email_address;
        $this->password = $password;
 }
}