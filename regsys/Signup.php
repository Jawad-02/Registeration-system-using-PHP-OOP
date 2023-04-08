<?php
session_start();
if(isset($_SESSION["Uname"])){
    header("location: ./index.php?error=logined");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="Css/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link herf = "https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>I Will Take Your Email</title>
</head>
<body>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">SIGN UP</h1>
                <div class="card-text">
                    <form action="includes/Signup.inc.php" method="POST" autocomplete="off">
                    <?php if(isset($_GET['error'])){ ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                                    <!-- error handeling -->
                                    <strong>ERROR!</strong> 
                                <?php
                                if($_GET['error'] == "emptyinput" ){
                                    echo 'You Must Fill All The Input!';
                                }
                                elseif($_GET['error'] == "username"){
                                    echo 'Invalid username!';
                                }
                                elseif($_GET['error'] == "passwordmatch"){
                                    echo 'Password Do Not Match!';
                                }
                                elseif($_GET['error'] == "usernameoremailtaken"){
                                    echo 'Username or Email Taken!';
                                }
                                ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php } ?>
                    <div class="form-group">
                            <label for="exampleInputUser1">UserName</label>
                            <input name="uesrname"
                            type="text"
                            class="form-control form-control-sm"
                            id="examplInputEmail1"
                            value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email Address</label>
                            <input name="email"
                            type="email"
                            class="form-control form-control-sm"
                            id="examplInputEmail1"
                            value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input name="password" 
                            type="password"
                            class="form-control form-control-sm"
                            id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">EnterPassword</label>
                            <input name="password1" 
                            type="password"
                            class="form-control form-control-sm"
                            id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="submit">
                            Sign Up
                        </button>
                        <div class="signup">
                        YOU Have An Account? <a href="Login.php" > LOGIN </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>