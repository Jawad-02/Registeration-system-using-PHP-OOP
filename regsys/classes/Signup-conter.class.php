<?php

class SignupConter extends Signup {

    private $Uname;
    private $Uemail;
    private $Upass;
    private $Urepass;

    public function __construct($Uname, $Uemail, $Upass, $Urepass){

        $this->Uname   = $Uname;
        $this->Uemail  = $Uemail;
        $this->Upass   = $Upass;
        $this->Urepass = $Urepass;

    }
    public function signupUser(){
        if($this->emptyInput() == false){
            // echo "Empty input!";
            header("location: ../Signup.php?error=emptyinput");
            exit();
        }
        if($this->invalidUname() == false){
            // echo "Invalid username!";
            header("location: ../Signup.php?error=username");
            exit();
        }
        if($this->passMatch() == false){
            // echo "Password Do Not Match!";
            header("location: ../Signup.php?error=passwordmatch");
            exit();
        }
        if($this->checkingUser() == false){
            // echo "Usernammr or Email Taken!";
            header("location: ../Signup.php?error=usernameoremailtaken");
            exit();
        }
    
        $this->setUser($this->Uname, $this->Uemail, $this->Upass);
    }

    private function emptyInput(){

        $result;
        if(empty($this->Uname) || empty($this->Uemail) || empty($this->Upass) || empty($this->Urepass) ){
            $result =  false;
        }
        else{
            $result = true;
        }

        return $result;

    }
    private function invalidUname(){

        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->Uname)){
            $result =  false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function invalidUemail(){
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result =  false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function passMatch(){
        $result;
        if($this->Upass != $this->Urepass){
            $result =  false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function checkingUser(){
        $result;
        if(!$this->checkUser($this->Uname, $this->Uemail)){
            $result =  false;
        }
        else{
            $result = true;
        }
        return $result;
    }



}




?>