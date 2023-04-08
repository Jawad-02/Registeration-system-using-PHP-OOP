<?php

    class EditConter extends Edit{

        private $Uid;
        private $Uname;
        private $Uemail;

        public function __construct($Uid,$Uname,$Uemail){
            $this->Uid = $Uid;
            $this->Uname = $Uname;
            $this->Uemail = $Uemail;
        }

        public function EditUser(){
            if($this->emptyInput() == false){
                header("location: ../includes/EditUser.inc.php?error=emptyInput");
                exit();
            }
            // call the Edit Class
            $this->Edited($this->Uid, $this->Uname, $this->Uemail);
        }


        private function emptyInput(){
            $result;
            if(empty($this->Uname) ||empty($this->Uemail)){
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
        }

    }

?>