<?php

#[AllowDynamicProperties] class DBConnector
{
    private $db_user = 'root';
    private $db_pass = '';
    private $db_host = 'localhost';
    private $db_name = 'user_management_system';

    public function __construct() {
        $dbConnect = new DBConnector();

    }

    public function dbCon($host, $user, $pass, $name)
    {
        //Attempts connection to database
        $this->mysqli = new mysqli($host, $user, $pass, $name);
        if ($this->mysqli->connect_errno) {
            echo 'Database connection error: ' . $this->mysqli->connect_error;
            exit;
        }
    }

    public function getHost(){
        return $this->db_host;
    }

    public function getUser(){
        return $this->db_user;
    }

    public function getPass(){
        return $this->db_pass;
    }

    public function getName(){
        return $this->db_name;
    }
}

