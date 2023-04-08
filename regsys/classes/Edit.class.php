<?php
class Edit extends Dbh{

    
    protected function Edited($Uid, $Uname, $Uemail){
        $stmt = $this->connect()->prepare( "SELECT * FROM `users` WHERE `users`.`id` = ?;" );

        if(!$stmt->execute(array($Uid))){

            $stmt = null;
            header("location: ../includes/EditUser.inc.php?ereor=stmtfailed");
            exit();

        }
        if($stmt->rowCount() == 0){

            $stmt = null;
            header("location: ../includes/EditUser.inc.php?ereor=usernotfound");
            exit();

        }elseif($stmt->rowCount() > 0){

            $stmt = $this->connect()->prepare("UPDATE `users` SET `username` = ?, `email` = ? WHERE `users`.`id` = ?;");

            if(!$stmt->execute(array($Uname, $Uemail, $Uid))){

                $stmt = null;
                header("location: ../includes/EditUser.inc.php?ereor=stmtfailed");
                exit();

            }

        }
        $stmt = null;
    }


}


// UPDATE `users` SET `username` = 'jawa', `email` = 'jouad-2002@hotmail.co' WHERE `users`.`id` = 1;


// UPDATE `users` SET `username` = 'jawd', `email` = 'jouad-2002@hotmail.om' WHERE `users`.`id` = 1;


?>