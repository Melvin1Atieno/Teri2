<?php 
    require('config.php');
    session_start();
    require('geoplugin.class.php');
    $geoplugin = new geoPlugin();
    $geoplugin->locate();
    $username = $_SESSION['username'];
    // header("Refresh:60");

    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $goldone = $_POST["package_type"];
        $amount = (int)$_POST["amount"];
        $ramount = (int)($geoplugin->convert($amount,$float=1,$symbol=false));
        $expected_amount = $ramount*2;

        $check = mysqli_query($con, "SELECT * FROM investments WHERE InvestorsUsername = '$username' AND Amount ='$ramount'");
        
        if($check->num_rows < 1){
            $result = "INSERT INTO investments (PackageType,Amount,ExpectedReturns,InvestorsUsername,Paid,InvestmentDate,NoOfMatchesFound,Merged)
                VALUES('$goldone','$ramount','$expected_amount','$username','not_paid', NOW(),0,0)";
            $results = mysqli_query($con, $result);
        }else{ 
            $Error = 'you can only make one investment';
            echo $Error;

              }  
         }
    //select user to merge
    $query = mysqli_query($con,"SELECT * FROM investments WHERE Merged < 2 LIMIT 1");
    $Username = "";
    $id = "";
    $Amount = "";
    $musername ="";
    $usercountry = "";
    while ($row = $query->fetch_assoc()){
        $id = (int)$row['InvestmentID'];
        $Username = $row['InvestorsUsername'];//user who is next on list for merging
        $Amount = $row['Amount'];// invested amount
        // get country for user to be merged
        $getcountry = mysqli_query($con, "SELECT * FROM users WHERE username='$Username'");
        while ($countryrow = $getcountry->fetch_assoc()){
            $usercountry = $countryrow['country'];
        }
    }
        // get match from same country
        $nquery = mysqli_query($con, "SELECT * FROM investments WHERE InvestorsUsername IN(SELECT username FROM users WHERE country='$usercountry') AND InvestorsUsername!='$Username' AND NoOfMatchesFound !=1 AND Amount='$Amount'");
        while ($nrow = $nquery->fetch_assoc()){
            $musername = $nrow['InvestorsUsername'];
            //update user who's been merged
            $update = mysqli_query($con,"UPDATE investments SET Merged = 1 + Merged  WHERE InvestorsUsername='$Username' AND InvestmentID='$id' AND Amount='$Amount'");
            //update details for user who is a match
            $mupdate = mysqli_query($con, "UPDATE investments SET NoOfMatchesFound = 1 WHERE InvestorsUsername='$musername' AND Amount='$Amount'");
            //insert details to matches table for merged
            $result = mysqli_query($con,"INSERT INTO matches(InvestmentID, ToBePaidBy,ToPayTo)
            VALUES('$id','$musername','$Username')");
            
        }
    
    
?>
