<?php
require 'config.php';
// Starting session
session_start();
if(isset($_SESSION["username"])){
    unset($_SESSION["username"]);
    session_destroy();
    header('location: index.php');
}else if(isset($_SESSION['admin']) || isset($_SESSION['adminEmail'])){
    unset($_SESSION['admin']);
    unset($_SESSION['adminEmail']);
    session_destroy();
    header('location:index.php');
}
?>