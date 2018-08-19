<?php
require('config.php');
session_start();
if(isset($_GET['rem'])){
    $id = (int)$_GET['rem'];
    $dquery = mysqli_query($con, "DELETE  FROM investments WHERE InvestmentID=$id ");
    $query = mysqli_query($con,"DELETE FROM matches WHERE InvestmentID=$id ");
    header ("location: admin-homepage.php");
    }
?>