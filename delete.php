<?php
require('config.php');
session_start();
// if($_GET['rem']){
//     cancelinvestment($InvestmentId);
//     }
    $username = $_SESSION['username']; 
    $dquery = mysqli_query($con, "DELETE * FROM investments WHERE InvestorsUsername = $username AND InvestmentID='".$_GET['rem']."'");
    header ("location: homepage.php");
?>