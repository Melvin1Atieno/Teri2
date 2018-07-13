<?php 
    session_start();
    $username = $_SESSION['username'];
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $state = $_POST["confirm"];
        var_dump($_POST);
        


    $myquery = mysqli_query($con,"UPDATE investments SET paid='paid' WHERE username = '$match_username' AND merged='$notmerged' AND amount='$amount'");
    }


?>