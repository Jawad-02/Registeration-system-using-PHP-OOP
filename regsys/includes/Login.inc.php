<?php
if(isset($_POST["submit"])){

    // Grabbing the data

    $Uname   = $_POST["text"];
    $Upass   = $_POST["password"];
    //echo $Uname;


    // Instantiate SignupConter class
    include "../classes/DB_Con.class.PHP";
    include "../classes/Login.class.php";
    include "../classes/Login-conter.class.php";
    $Login = new LoginConter($Uname, $Upass);
    // Ruuning error handlers and user singnup 
    $Login->LoginUser();
    // Going to back to front page 
    header("location: ../index.php?error=none");
}

?>
