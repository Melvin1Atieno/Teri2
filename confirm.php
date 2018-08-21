<?php 
    require('config.php');
    session_start();
    if(isset($_GET['con'])){
        $id = (int)$_GET['con'];
        $NoOfMatchesFound = 0;
        $username = $_SESSION['username'];
        $query = mysqli_query($con, "SELECT * FROM investments WHERE InvestmentID=$id");
        while($row = $query->fetch_assoc()){
            $NoOfMatchesFound = $row['NoOfMatchesFound'];
            if ($NoOfMatchesFound == 1){
                $upquery = mysqli_query($con, "UPDATE investments SET Paid='Paid' WHERE InvestmentID = $id AND InvestorsUsername='$username'");
                header("location:homepage.php");
            }
            else{
                $username = $_SESSION['username'];
                header("location:homepage.php");
            }
        }
    }

?>