<?php


class Admin extends User
{
    public $accessLevel;
    public function __construct($accessLevel,$email,$password,$username,$userId)
    {
        $this->accessLevel=$accessLevel;
        parent::__construct($email,$password,$username,$userId);
    }

    public function editUser()
    {

    }
    public function getInfor(){
        return 'AccessLevel: '.$this->accessLevel. 'Email: '.$this->email;
    }
}