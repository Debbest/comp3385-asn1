//400005712
<?php

include '../controller/RegistrationController.php';
#[AllowDynamicProperties] class RegistrationModel
{
    private $db_user = 'root';
    private $db_pass = '';
    private $db_host = 'localhost';
    private $db_name = 'user_management_system';

    public function __construct() {
        $register = new RegistrationModel();
        $register->dbCon($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

        if(isset($_POST['submit'])) {
            $register->userExists($_POST['uname-input']);
        }

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
    //Checks DB for username
    public function userExists($username) :bool{
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $this->mysqli->query($sql);
        if($result->num_rows > 0){
            return true;
        }else{
            return false;
        }

    }

    //Adds user to database
    public function addUser($username, $email, $password, $role){
        $sql = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
        $result = $this->mysqli->query($sql);
        if($result){
            echo 'User added';
        }else{
            echo 'Error adding user';
        }
    }

}