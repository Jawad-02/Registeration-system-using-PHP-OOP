<?php

class Delete extends Dbh{

    protected function DelUser($Uid){
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE id = ?;');

        if(!$stmt->execute(array($Uid))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }
        elseif(($stmt->rowCount() > 0)){
            
            $stmt = $this->connect()->prepare('DELETE FROM `users` WHERE `users`.`id` = ?;');

            if(!$stmt->execute(array($Uid))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

        }

        $stmt = null;
    }

}

?>