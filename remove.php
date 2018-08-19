<?php
    require('config.php');
    session_start();
    if(isset($GET['rem'])){
        $username = $_SESSION['username'];
        $query = mysqli_query($con, "DELETE FROM users WHERE username='$username'");
        $squery = mysqli_query($con,"DELETE FROM investments WHERE InvestorsUsername='$username'");
        unset($_SESSION["username"]);
        session_destroy();
        header('location:index.php');
    }
?>