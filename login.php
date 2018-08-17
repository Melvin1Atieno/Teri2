<?php 
require_once 'config.php';
session_start();
// defining variables and initialize with empty values
    $lusername = $lpassword =$hashed_password ="";
   // processing form data when its submitted
   if($_SERVER["REQUEST_METHOD"] == "POST"){
       $lusername = trim($_POST["lusername"]);
       $lpassword = trim ($_POST["lpassword"]);
       
        $query = "SELECT * FROM users where username = '$lusername' AND verified=1";
        $results = mysqli_query($con, $query);
        while ($row = $results->fetch_assoc()){
            $hashed_password = $row['password'];
            $admin = $row['admin'];
            $email = $row['email'];

            if(password_verify($lpassword,$hashed_password))
               {
                    if($admin=='false'){
                        $_SESSION['username'] = $lusername;
                        $_SESSION['success'] = "You are now logged in";
                        header('location: homepage.php');
                    }
                    if($admin =='true'){
                        $_SESSION['admin'] = 'true';
                        $_SESSION['adminEmail'] = $email;
                        header('location:admin-homepage.php');
                    }
                }
                else{
                    echo "<script>alert('Invalid Username or Password combination')</script>";
                    header('location: index.php');
                    }
            }
    }
    ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>