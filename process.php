
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
    //select user to merge
    $query = mysqli_query($con,"SELECT * FROM investments WHERE Merged < 2 LIMIT 1");
    $Username = "";
    $id = "";
    while ($row = $query->fetch_assoc()){
        $id = (int)$row['InvestmentID'];
        $Username = $row['InvestorsUsername'];
        $Amount = $row['Amount'];
        //select the user to merge I.e to be a match
        $nquery = mysqli_query($con, "SELECT * FROM investments WHERE InvestorsUsername != '$Username' AND NoOfMatchesFound < 1 AND Amount='$Amount' ");
        while ($nrow = $nquery->fetch_assoc()){
            $musername = $nrow['InvestorsUsername'];
            //update user who's been merged
            $update = mysqli_query($con,"UPDATE investments SET Merged = 1 + Merged  WHERE InvestorsUsername='$Username' AND InvestmentID='$id'");
            //update details for user who is a match
            $mupdate = mysqli_query($con, "UPDATE investments SET NoOfMatchesFound = 1 WHERE InvestorsUsername='$musername'");
            //insert details to matches table
            
            $result = mysqli_query($con,"INSERT INTO matches(InvestmentID, ToBePaidBy,ToPayTo)
            VALUES('$id','$musername','$Username')");
     
        }
    }
?>
