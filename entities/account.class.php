<?php

class Account
{
    //declare private variable
    private $id;
    private $lastName;
    private $firstName;
    private $accountNumber;

    //create function construct
    public function __construct($lastName, $firstName, $accountNumber)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->accountNumber = $accountNumber;
    }
}