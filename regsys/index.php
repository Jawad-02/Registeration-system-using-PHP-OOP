<?php
session_start();
$colors = array('primary', 'secondary' , 'success', 'danger', 'warning', 'info', 'light', 'dark');
include "./includes/Users.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/reset.css">
    <link rel="stylesheet" href="Css/main.css">
    <title>AllMyProject</title>
</head>
<body>

    <div class = "main-content">
    <div class="h1 m-4"> <?php  
        echo "Welcome " . $_SESSION["Uname"];
        ?> </div>
    <?php if(isset($_GET['error'])){ ?>
                                <?php
                                if($_GET['error'] == "done" ){
                                    ?>
                                    <div class="alert alert-success alert-dismissible fade show my-2" role="alert"> 
                                    <!-- error handeling -->
                                    <strong>SUCCESS!</strong> 
                                    <?php
                                    echo 'User Deleted successfuly!';
                                    ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <?php
                                }
                                ?>
                                <?php
                                if($_GET['error'] == "stmtfailed" ){
                                    ?>
                                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert"> 
                                    <!-- error handeling -->
                                    <strong>ERROR!</strong> 
                                    <?php
                                    echo 'Databases Dose Not Work!';
                                    ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <?php
                                }
                                ?>
                                <?php
                                if($_GET['error'] == "usernotfound" ){
                                    ?>
                                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert"> 
                                    <!-- error handeling -->
                                    <strong>ERROR!</strong> 
                                    <?php
                                    echo 'User Not Founded!';
                                    ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <?php
                                }
                                ?>
                                <?php
                                if($_GET['error'] == "editeduser" ){
                                    ?>
                                    <div class="alert alert-success alert-dismissible fade show my-2" role="alert"> 
                                    <!-- error handeling -->
                                    <strong>SUCCESS!</strong> 
                                    <?php
                                    echo 'User Updated Successfully!';
                                    ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <?php
                                }
                                ?>
                            <?php } ?>
        <section class = "wrapper-main">
            <table>
                <tr>
                    <th colspan="5">Users List</th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Edit/Delete</th>
                </tr>
                <?php
                while($row = $ArrayOfUsere->fetch(PDO::FETCH_ASSOC)){
                
                echo "<tr>";
                    echo "<td>". $row['id'] ."</td>";
                    echo "<td>". $row['username'] ."</td>";
                    echo "<td>". $row['email'] ."</td>";
                    echo '<td class = "buttons">';
                    echo '<a href="./includes/EditUser.inc.php';
                    echo '?id='.$row['id'];
                    echo '">Edit</a>';
                    echo '<a href="./includes/DelUser.inc.php?id=';
                    echo $row['id'];
                    echo'">Delete</a>';
                    echo '</td>';
                echo"</tr>";

                }
                ?>
            </table>
        </section>
        <a class = "btn <?php echo "btn-" . $colors[rand(0,7)];?> my-5" href="./includes/logout.inc.php"> Logout </a>
    </div>

    <?php 
    if(isset($_SESSION["Uname"])) { 
    ?>
    <div class="container text-center ">
                            <?php if(isset($_GET['error'])){ ?>
                                <?php
                                if($_GET['error'] == "logined" ){
                                    ?>
                                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert"> 
                                    <!-- error handeling -->
                                    <strong>ERROR!</strong> 
                                    <?php
                                    echo 'You Are Logined Already please Lougout first!';
                                    ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <?php
                                }
                                ?>
                            <?php } ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<?php 
}
else{
    header('location: ./Login.php') ;
}
?>
</body>
</html>