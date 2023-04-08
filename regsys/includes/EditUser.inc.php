<?php
    if(isset($_GET['id'])){
        $Uid = $_GET['id'];
    }
    if(isset($_POST['submit'])){
        $Uid    = $_POST['ID'];
        $Uname  = $_POST['UserName'];
        $Uemail = $_POST['Email'];

        include "../classes/DB_Con.class.PHP";
        include "../classes/Edit.class.php";
        include "../classes/Edit-conter.class.php";

            $Edit = new EditConter($Uid, $Uname, $Uemail);

            $Edit->EditUser();


        header("location: ../index.php?error=editeduser");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/reset.css">
    <link rel="stylesheet" href="../Css/EditPage.css">
    <title>EditUser</title>
</head>
<body>
    <main class="main-head">
        <div class = "main-form">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" class="EditForm" method = "POST">
                <label for="ID"> ID </label>
                <input class ="static" type="text" name="ID" readonly placeholder="ID" value = "<?php 
                if(isset($Uid)){
                echo $Uid;
                }
                ?>">
                <label for="UserName"> UserName </label>
                <input type="text" name="UserName" placeholder="UserName">
                <label for="Password"> Email </label>
                <input type="text" name="Email" placeholder="Email">
                <input type="submit" class= "submit" name="submit"  value ="Edit"></input>
                <a href="../index.php">Cancel</a>
            </form>
        </div>
    </main>
</body>
</html>