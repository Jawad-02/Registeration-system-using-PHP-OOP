<?php 

// $dns = 'mysql:host=localhost;dbname=first';
// $user = 'root';
// $pass = '';
// $options = array(
// PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
// );

// try {
//     $db = new PDO($dns,$user,$pass, $options);

//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo"Connected";

// }

// catch(PDOException $e){

//     echo 'failed' . $e->getmessage();

// }
class Dbh {

    protected function connect(){

        try {
            $dns = 'mysql:host=localhost;dbname=first';
            $user = 'root';
            $pass = '';
            $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',PDO::ERRMODE_EXCEPTION);
            
            $db = new PDO($dns,$user,$pass, $options);
            return $db; 
        } catch (PDOException $e) {
            print 'Error!:' . $e->getmessage() . "<br>";
            die();
        }

    }

    }
?>