//400005712
<?php
    require_once('../model/LoginModel.php');
    //include('ValidationController.php');
class LoginController
{
    private $username;
    private $password;

    private $validator;

    Private $loginModel;
    public function __construct(){
        $this->validator = new ValidationController();
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];
        if ($this->validator->isValidLogin($this->username)){
            $this->loginUser($this->username,$this->password);
        }
        else{
            $this->errors = $this->validator->getErrors();
        }
    }

    public function loginUser($username, $password): bool{
        $hashedPass = password_hash($password, PASSWORD_DEFAULT);
        if ($this->loginModel->verifyUser($username, $hashedPass)){
            //echo "Login in success";
            return true;
        }
        else{
            //echo "Login failed";
            return false;
        }
    }

}
