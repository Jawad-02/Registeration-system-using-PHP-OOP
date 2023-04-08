<?php

class Users extends Dbh{

    public function getUsers(){

        $sql = "SELECT * FROM users";

        $stmt = $this->connect()->query($sql);
        return $stmt;

    }

}

?>