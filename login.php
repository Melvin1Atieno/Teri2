<?php 
require_once 'config.php';
// defining variables and initialize with empty values
    $lusername = $lpassword = "";
   // processing form data when its submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $lusername = trim($_POST["lusername"]);
        $lpassword = trim ($_POST["lpassword"]);

        $query = "SELECT username , password FROM users where username = '$lusername' AND password= '$lpassword'";
        $results = mysqli_query($con, $query);
        
        if (mysqli_num_rows($results) == 1){
        
           $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: homepage.php');
        }




}

?>