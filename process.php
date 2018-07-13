
<?php 
    require('config.php');
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $goldone = $_POST["package_type"];
        $amount = (int)$_POST["amount"];
        $expected_amount = $amount*2;
        $username = $_SESSION['username'];
        
        
        
        
        $result = mysqli_query($con,"INSERT INTO investments(PackageType, Amount,ExpectedReturns,InvestorsUsername,Paid,InvestmentDate)
            VALUES('$goldone','$amount','$expected_amount','$username', 'not_paid', NOW())");
    }
    
    $query = mysqli_query($con,"SELECT * FROM investments WHERE NoOfMatchesFound < 2 LIMIT 1");
    $Username = "";
    // echo "<Script>('$Usernam')</Script>";
    while ($row = $query->fetch_assoc()){
        // $Merged = (int)$row['Merged'];
        $id = (int)$row['InvestmentID'];
        $Username = $row['InvestorsUsername'];
        $nquery = mysqli_query($con, "SELECT * FROM investments WHERE InvestorsUsername != '$Username' AND Merged < 2 ");
        while ($nrow = $nquery->fetch_assoc()){
            $musername = $nrow['InvestorsUsername'];
            //update user who's been merged
            $update = mysqli_query($con,"UPDATE investments SET Merged = Merged + 1 WHERE InvestorsUsername='$Username' AND InvestmentID='$id'");
           //update details for user who is a match
            $mupdate = mysqli_query($con, "UPDATE investments SET NoOfMatchesFound = 1 WHERE InvestorsUsername='$musername'");
            //insert details to matches table
            $tupdate = mysqli_query($con, "INSERT INTO matches (InvestmentID, MatchOneUsername) VALUES('$id', '$musername',)");
        }
    }
    



?>
