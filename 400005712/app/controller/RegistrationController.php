//400005712
<?php
require_once('../model/RegistrationModel.php');

class RegistrationController
{
    private $username, $email, $password, $confEmail, $confPass, $role;
    private $validator;
    private $regModel;
    private $errors;

    public function __construct(){

        $this->regModel = new RegistrationModel();
        $this->username = $_POST['uname-input'];
        $this->email = $_POST['email-input'];
        $this->confEmail = $_POST['email-confirm'];
        $this->password = $_POST['pass-input'];
        $this->confPass = $_POST['pass-confirm'];
        $this->role = $_POST['roles'];

    // validates inputs
        $this->validator = new ValidationController();
        if ($this->validator->isValidReg($this->username,$this->email,$this->confEmail,$this->password,$this->confPass)){
            $this->registerUser($this->username,$this->email,$this->password,$this->role);
        }
        else{
           $this->errors = $this->validator->getErrors();
        }
    }

    // creates hashed password and adds user to database
    public function registerUser($username, $email, $password, $role){
        $hashedPass = password_hash($password, PASSWORD_DEFAULT);
        $this->regModel->addUser($username, $email, $hashedPass, $role);
    }


}