<?php
require 'config.php';
// Starting session
session_start();
unset($_SESSION["username"]);
session_destroy();
header('location: index.php');



    // Removing session data
    // if(isset($_SESSION["username"])){
    //     $sql = "DELETE * FROM logged WHERE username=$username";
    //     if($con->query($sql) === true){
    //         echo "Records were deleted successfully.";
    //     } else{
    //         echo "ERROR: Could not able to execute $sql. " . $con->error;
    //     }
    // }
?>