//400005712
<?php

#[AllowDynamicProperties] class LoginModel
{
    private $db_user = 'root';
    private $db_pass = '';
    private $db_host = 'localhost';
    private $db_name = 'user_management_system';
    public function __construct() {

        $login = new LoginModel();
        $login->dbCon($this->db_host, $this->db_user, $this->db_pass, $this->db_name);


    }

    private function dbCon($host, $dbuser, $dbpass, $dbname)
    {
        //Attempts connection to database
        $this->mysqli = new mysqli($host, $dbuser, $dbpass, $dbname);
        if ($this->mysqli->connect_errno) {
            echo 'Database connection error: ' . $this->mysqli->connect_error;
            exit;
        }
    }

    public function verifyUser($email, $password) :bool{
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $this->mysqli->query($sql);
        if($result->num_rows > 0){
            return true;
        }else{
            return false;
        }
    }

}