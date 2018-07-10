<?php
require 'config.php';
// Starting session
session_start();
unset($_SESSION["username"]);
session_destroy();
header('location: index.php');
?>