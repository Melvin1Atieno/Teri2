<?php
require('config.php');
session_start();
if(isset($_GET['rem'])){
    $id = (int)$_GET['rem'];
    // $id = mysqli_escape_string($_GET['rem']);
    $username = $_SESSION['username'];
    // cancelinvestment($InvestmentId);
    $dquery = mysqli_query($con, "DELETE  FROM investments WHERE InvestorsUsername = '$username' AND InvestmentID=$id ");
    $username = $_SESSION['username']; 
    header ("location: homepage.php");
    }
?>