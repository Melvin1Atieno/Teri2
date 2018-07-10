<?php
require 'config.php';
// Starting session
session_start();
if(isset($_SESSION["username"])){
    header('location:homepage.php');
}else{
    header('location: index.php');
}

?>