<?php require('config.php');
require ('load.php');
session_start();
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash'])){
    //verify data
    $email = mysqli_escape_string($_GET['email']); //set email variable
    $hash = mysqli_escape_string($_GET['hash']);
    $search = mysqli_query("SELECT * FROM users WHERE email='$email' AND hash='$hash' AND verified=0 ");
    $match = mysqli_num_rows($search);
    if ($match > 0){
        $update = mysqli_query($con,"UPDATE users SET verified = 1  WHERE email='$email' AND hash='$hash' AND verified=0");
        $_SESSION["username"] = $username;
        header('location: homepage.php');
    }
    else{
        echo "<div class='statusmsg'>Invalid URL or account already activated. Try logging in</div>";
    }
}else{
    //Invalid approach
    echo "<div class='statusmsg'>Invalid approach pleas euse the link that has been sent to your email</div>";
}
?>