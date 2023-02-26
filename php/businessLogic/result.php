<?php
require '../businessLogic/variables.php';
session_start();
if(isset($_POST['login-btn'])){
    $obj = new LoginLogic($_POST);
    $obj->verify();
}

class LoginLogic{
    private $formData;
    function __construct($formData){
        $this->formData = $formData;
    }

    public function verify(){
        $email = $this->formData['email'];
        $password =  $this->formData['password'];
       
       if($this->verifyEmpty($email, $password)){
           header("Location:../views/index.php");
       }
      else if($this->verifyLogin($email, $password)){
         header("Location:../views/home.php");
       }
    else{
        header("Location:../views/userpage.php");
       }
    }
   private function verifyEmpty($email, $password){
        if(empty($email) || empty($password))
        return true;
     return false;
    }
   private function verifyLogin($email, $password)
   {
      
    global $users;
    foreach($users as $user){
        if($user['email'] == $email && $user ['password'] == $password){
            $_SESSION['role'] = $user ['role'];
            $_SESSION['email'] = $user ['email'];
            $_SESSION['Date'] = date('Y-m-d h:i:s');
            return true;
        }
    }
    return false;
}
}

