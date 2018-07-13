
<?php 
    require('config.php');
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $goldone = $_POST["package_type"];
        $amount = (int)$_POST["amount"];
        $expected_amount = $amount*2;
        $username = $_SESSION['username'];
        var_dump($_POST);
        


       
        
        $result = mysqli_query($con,"INSERT INTO investments(package_type, amount,expected_earnings,username,paid,date_made,match_found)
            VALUES('$goldone','$amount','$expected_amount','$username', 'not_paid', NOW(), 'not_found')");
    }
    


?>
