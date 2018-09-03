<?php
    require('config.php');
    session_start();
    if(isset($_GET['rem'])){
        $rem = $_GET['rem'];
        $username = $_SESSION['username'];
        // select user from investments table 
        $not_paid_user = mysqli_query($con,"SELECT * FROM investments WHERE InvestorsUsername='$username'");
        // check if $not_paid_user  is empty
        if($not_paid_user){
            while ($row = $not_paid_user ->fetch_assoc()){
                $paid = $row['Paid'];
                if($paid == 'paid'){
                    break;
                    header('location:homepage.php');
                }else{
                    $query = mysqli_query($con, "DELETE FROM users WHERE username='$username'");
                    $squery = mysqli_query($con,"DELETE FROM investments WHERE InvestorsUsername='$username'");
                    $delete_match = mysqli_query($con,"DELETE FROM matches WHERE ToBePaidBy = '$username' OR ToPayTo = '$username'");
                    unset($_SESSION["username"]);
                    session_destroy();
                    header('location:index.php');
                }
            }
        }
        else{
            $delete_user = mysqli_query($con, "DELETE FROM users WHERE username='$username'");
            $delete_invesment = mysqli_query($con,"DELETE FROM investments WHERE InvestorsUsername='$username'");
            $delete_matches = mysqli_query($con,"DELETE FROM matches WHERE ToBePaidBy = '$username' OR ToPayTo = '$username'");
            unset($_SESSION["username"]);
            session_destroy();
            header('location:index.php');
        
        }
    }
?>