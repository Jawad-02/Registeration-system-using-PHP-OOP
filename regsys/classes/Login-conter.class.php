<?php

class LoginConter extends Login {

    private $Uname;
    private $Upass;

    public function __construct($Uname, $Upass){

        $this->Uname   = $Uname;
        $this->Upass   = $Upass;

    }
    public function LoginUser(){
        if($this->emptyInput() == false){
            // echo "Empty input!";
            header("location: ../Login.php?error=emptyinput");
            exit();
        }
    
        $this->getUser($this->Uname, $this->Upass);
    }

    private function emptyInput(){

        $result;
        if(empty($this->Uname) || empty($this->Upass) ){
            $result =  false;
        }
        else{
            $result = true;
        }

        return $result;

    }



}




?>