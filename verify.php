<?php 
session_start();
require('config.php');
require ('load.php');
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    //verify data
    $email = $con->real_escape_string($_GET['email']); //set email variable
    $hash = $con->real_escape_string($_GET['hash']);
    $search = mysqli_query($con,"SELECT * FROM users WHERE email='$email' AND randhash='$hash' AND verified=0");
    //$match = mysqli_num_rows($search);
    while ($row = $search->fetch_assoc()){
        $username = $row['username'];
        $admin = $row['admin'];
        if($admin == 'false'){
            $_SESSION["username"] = $username;  
            $update = mysqli_query($con,"UPDATE users SET verified=1  WHERE email='$email' AND randhash='$hash' AND verified=0");
            header('location: homepage.php');
           } 
           else if($admin == 'true'){
                $update = mysqli_query($con,"UPDATE users SET verified=1  WHERE email='$email' AND randhash='$hash' AND verified=0");
                $_SESSION["admin"] = 'true';
                $_SESSION["adminEmail"] = $email;
                header('location: admin-homepage.php');
           }
        }
    }
?>