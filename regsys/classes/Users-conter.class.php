<?php

    class UsersConter extends Users{
        public function AllUSERS(){     // I Shoud Check For Somthing Here 
        $data = $this->getUsers();      //But I Do Not Have Any Thing To Check
        return $data;                   //So I Just Passed it
        }
    }

?>