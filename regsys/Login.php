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
    <link rel="stylesheet" href="Css/reset.css">
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link herf = "https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Login Form</title>
</head>
<body>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">LOGIN</h1>
                <div class="card-text">
                    <form action=" ./includes/Login.inc.php" method="POST" autocomplete="off">
                    <?php if(isset($_GET['error'])){ ?>
                                <?php
                                if($_GET['error'] == "emptyinput" ){?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                                    <!-- error handeling -->
                                    <strong>ERROR!</strong>
                                <?php
                                    echo 'You Must Fill All The Input!';
                                }
                                elseif($_GET['error'] == "usernotfound"){
                                    ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                                    <!-- error handeling -->
                                    <strong>ERROR!</strong>
                                    <?php
                                    echo 'User Not Found!';
                                }
                                elseif($_GET['error'] == "wrongpassword"){?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                                    <!-- error handeling -->
                                    <strong>ERROR!</strong>
                                    <?php
                                    echo 'Wrong Entered Password!';
                                }
                                elseif($_GET['error'] == "done"){?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                                    <!-- error handeling -->
                                    <strong>success!</strong>
                                    <?php
                                    echo 'Account Signup Successfully!';
                                }
                                ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php } ?>
                    <div class="form-group">
                            <label for="exampleInputUser1">UserName Or Email</label>
                            <input name="text"
                            type="text"
                            class="form-control form-control-sm"
                            id="examplInputtext1"
                            placeholder="UserName Or Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <a href = "#" style="float: right; font-size: 12px;">
                            Forgot Password?
                            </a>
                            <input name="password" 
                            type="password"
                            class="form-control form-control-sm"
                            id="exampleInputPassword1"
                            placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="submit">
                            Sign In
                        </button>
                        <div class="signup">
                        Don Not Have An Account? <a href="./Signup.php" > Create One </a>
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