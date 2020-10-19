<?php


class User
{
    public $username;
    public $userId;
    public $email;
    public $password;

    public function __construct(&$userId,$email,$password,$username)
    {
        $this->email=$email;
        $this->password=$password;
        $this->userId=$userId;
        $this->username=$username;
    }

    public function login()
    {

    }

    public function logout()
    {

    }
}