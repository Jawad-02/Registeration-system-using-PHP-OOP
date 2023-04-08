<?php

class Login extends Dbh {

    protected function getUser($Uname, $Upass){
        $stmt = $this->connect()->prepare('SELECT Upassword FROM users WHERE username = ? OR email = ?;');

        if(!$stmt->execute(array($Uname, $Uname))){
            $stmt = null;
            header("location: ../Signup.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0){

            $stmt = null;
            header("location: ../Login.php?error=usernotfound");
            exit();

        }
        $passHashed =  $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkUpass = password_verify($Upass, $passHashed[0]["Upassword"]);

        if($checkUpass == false){

            $stmt = null;
            header("location: ../Login.php?error=wrongpassword");
            exit();
        }
        elseif($checkUpass == true){

            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ? OR email = ? AND Upassword = ?;');

            if(!$stmt->execute(array($Uname, $Uname, $passHashed[0]['Upassword']))){
                $stmt = null;
                header("location: ../Login.php?error=stmtfailed");
                exit();
            }



            if($stmt->rowCount() == 0){

                $stmt = null;
                header("location: ../Login.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["Uid"] = $user[0]["id"];
            $_SESSION["Uname"] = $user[0]["username"];
            $stmt = null;
        }

        $stmt = null;
    }
}
?>