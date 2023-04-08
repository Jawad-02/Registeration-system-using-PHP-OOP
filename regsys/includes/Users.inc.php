<?php

include "./classes/DB_Con.class.PHP";
include "./classes/Users.class.php";
include "./classes/Users-conter.class.php";
    // Instantiate SignupConter class
    $objusers = new UsersConter;
    $ArrayOfUsere = $objusers->AllUSERS();
    // Going to back to front page 
?>