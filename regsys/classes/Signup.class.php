<?php

class Signup extends Dbh {

    protected function setUser($Uname, $Uemail, $Upass){
        $stmt = $this->connect()->prepare('INSERT INTO users (username, email, Upassword) VALUES (?, ?, ?);');
        $hashedPass = password_hash($Upass, PASSWORD_DEFAULT);
        
        if(!$stmt->execute(array($Uname, $Uemail, $hashedPass))){

            $stmt = null;
            header("location: ../Signup.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }


    protected function checkUser($Uname, $Uemail){
        $stmt = $this->connect()->prepare('SELECT username FROM users WHERE username = ? OR email = ?');

        if(!$stmt->execute(array($Uname, $Uemail))){

            $stmt = null;
            header("location: ../Signup.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
        return $resultCheck;
    }
}
?>