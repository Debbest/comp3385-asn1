//400005712
<?php

class ValidationController
{

    private array $error_message;


    public function __construct(){
        //initialize array
        $this->error_message = array();

    }

    //checks username format
    public function validUsername($username){


        if(strlen($username) < 1) {
            $this->error_message['username-error'] = "Username field is empty";
            return false;
        }
        elseif (strlen($username) > 5) {
            $this->error_message['username-error'] = "Username must be at least 5 characters long";
            return false;
        }
        else{
            return true;
        }

    }

    //searches database for username entered
    public function userExists($username) {
        //calls authentication function to check database for username
        //returns false if user not found in database
        $this->error_message['userexists-error'] = 'That username already exists';
        return false;
    }

    public function validEmail($email) {

        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        else {
            $this->error_message['email-error'] = 'Invalid email format';
            return false;
        }
    }


    //Compare emails addresses on the registration page
    public function confirmEmail($email, $confirmed) {
        if($email === $confirmed){
            return true;
        }
        else {
            $this->error_message['email-confirmation'] = 'Emails do not match';
            return false;
        }

    }

    public function validPassword($password){


        if (strlen($password) < 1) {
            //Check for a blank password
            $this->error_message['newpass-error'] = "Password field is empty";
            return false;

        } elseif (strlen($password) > 10) {
            //Check for a short password
            $this->error_message['newpass-error'] = "Password must be at least 10 characters long";
            return false;

        } elseif (!preg_match("/[A-Z]/", $password)
            || !preg_match("/[a-z]/", $password)
            || !preg_match("/[0-9]/", $password)
            || !preg_match("/[^A-Za-z0-9]/", $password)) {
            //Check if the password has all letters
            $this->error_message['newpass-error'] = "Password complexity not met";
            return false;
        } else {
            return true;

        }
    }


    //Compare passwords on registration page and stores error if not the same
    public function confirmPass($password, $confirmed){
        if ($password === $confirmed){
            return true;
        }
        else{
            $this->error_message['password-confirm'] = 'Passwords do not match';
            return false;
        }
    }

    public function isValidReg($user, $email, $confEmail, $pass, $confPass) {
        //checks username
        if ($this->validUsername($user) && !$this->userExists($user)
            && $this->validEmail($email) && $this->confirmEmail($email,$confEmail)
            && $this->validPassword($pass) && $this->confirmPass($pass, $confPass))
        {
            return true;
        }
        else
        {
            return false;
        }

    }



    //checks validation for login
    public function isValidLogin($email) {
        if ($this->validEmail($email)) {
            return true;
        }
        else {
            return false;
        }

    }

    //check validation for new user page
    public function isValidNewUser($user, $email,$pass){
        if ($this->validUsername($user) && !$this->userExists($user)
            && $this->validPassword($pass) && $this->validEmail($email))
        {
            return true;
        }
        else {
            return false;

        }
    }


    public function getErrors(): string{
        //stores errors in a string
        $errorString = '';
        foreach ($this->error_message as $key => $mess){
            $errorString .= $mess . '<br>';
        }
        return $errorString;
    }

}
