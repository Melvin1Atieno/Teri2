<?php 
//require_once 'config.php';
// defining variables and initialize with empty values
//$lusername = $lpassword = "";
   // processing form data when its submitted
    //if($_SERVER["REQUEST_METHOD"] == "POST"){

    //$lusername = trim($_POST["lusername"]);
    //$lpassword = trim ($_POST["lpassword"]);

    //$query = "SELECT username , password FROM users where username = '$lusername'";

    //if($stmt = $mysqli->prepare($query)){

        // Bind variables to the prepared statement as parameters
        //$stmt->bind_param("s", $param_username);

        // Set parameters
        //$param_username = $lusername;

        // Attempt to execute the prepared statement
        //if($stmt->execute()){

            // Store result
                //$stmt->store_result();
            //}
    // Check if username exists, if yes then verify password
                //if($stmt->num_rows == 1){                    
                    // Bind result variables
                    //$stmt->bind_result($lusername, $hashed_password);
                    //if($stmt->fetch()){
                        //if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            //session_start();
                            //$_SESSION['username'] = $username;      
                            //header("location: welcome.php");
                        //} else{
                            // Display an error message if password is not valid
                           // $password_err = 'The password you entered was not valid.';
                        //}
                   // }
                //} else{
                    // Display an error message if username doesn't exist
                   // $username_err = 'No account found with that username.';
                //}
            //} else{
               // echo "Oops! Something went wrong. Please try again later.";
            //}
        //}
        
        // Close statement
        //$stmt->close();
    //}

    
    //$results = mysqli_query($con, $query);
    //if (mysqli_num_rows($results) == 1){
       // $_SESSION['username'] = $username;
        //$_SESSION['success'] = "You are now logged in";
       // header('location: homepage.php');
    //}




//}

?>