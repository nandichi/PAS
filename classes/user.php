<?php

namespace classes;

class user
{
    private $id;
    private $username;
    private $password;

    public function __construct($id, $username, $password) {
        $this->id;
        $this->username;
        $this->password;
    }

    public function getId() {
        return $this->id;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }


}