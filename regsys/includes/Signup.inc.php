<?php
if(isset($_POST["submit"])){

    // Grabbing the data

    $Uname   = $_POST["uesrname"];
    $Uemail  = $_POST["email"];
    $Upass   = $_POST["password"];
    $Urepass = $_POST["password1"];

    // Instantiate SignupConter class
    include "../classes/DB_Con.class.PHP";
    include "../classes/Signup.class.php";
    include "../classes/Signup-conter.class.php";
    $Signup = new SignupConter($Uname, $Uemail, $Upass, $Urepass);
    // Ruuning error handlers and user singnup 
    $Signup->signupUser();
    // Going to back to front page 
    header("location: ../Login.php?error=done");

}



?>