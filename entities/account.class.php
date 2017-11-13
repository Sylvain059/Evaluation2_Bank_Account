<?php

class Account
{
    //declare private variable
    private $id;
    private $lastName;
    private $firstName;
    private $accountNumber;
    private $balance = 0;

    //create function construct
    public function __construct($lastName, $firstName, $accountNumber, $balance)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }
}