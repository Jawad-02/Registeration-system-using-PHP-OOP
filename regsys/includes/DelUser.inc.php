<?php
if(isset($_GET["id"])){

    // Grabbing the data

    $uid  = $_GET["id"];

    // Instantiate SignupConter class
    include "../classes/DB_Con.class.PHP";
    include "../classes/Delete.class.php";
    include "../classes/Delete-conter.class.php";
    // Ruuning error handlers and user singnup 
    $Deleted = new DeleteConter($uid);
    $Deleted->DeleteU();
    // Going to back to front page 
    header("location: ../index.php?error=done");
}
?>