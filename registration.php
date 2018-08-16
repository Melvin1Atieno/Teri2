<?php
    session_start();
    require('config.php');
    require('geoplugin.class.php');
    $geoplugin = new geoPlugin();
    $geoplugin->locate();
    $firstname_error = $lastname_error = $othername_error = $email_error = $phonenumber_error = $username_error ="";
    $firstname = $lastname = $othername = $email = $username = $phonenumber = $hash = $results = $admin="";
    if($_SERVER["REQUEST_METHOD"] === "POST")
    {
               
                
                $firstname = $con->real_escape_string(test_input($_POST["firstname"]));
                if(!preg_match("/^[a-zA-Z]*$/",$firstname)){
                    $firstname_error = "Only letters and white space allowed";
                }
                $lastname = $con->real_escape_string(test_input($_POST["lastname"]));
                if(!preg_match("/^[a-zA-Z]*$/",$lastname)){
                    $lastname_error = "Only letters and white space allowed";
                }
                $othername = $con->real_escape_string(test_input($_POST["othername"]));
                if(!preg_match("/^[a-zA-Z]*$/",$othername)){
                    $othername_error = "Only letters and white space allowed";
                }
                $email = $con->real_escape_string(test_input($_POST["email"]));
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $email_error = "Invalid email format";
                }
                $country = $con->real_escape_string(test_input($_POST["country"]));
                $phonenumber = $con->real_escape_string(test_input($_POST["phonenumber"]));
                $username =  $con->real_escape_string(test_input($_POST["username"]));
                if(!preg_match("/^[a-zA-Z]*$/",$username)){
                    $username_error = "Only letters and white space allowed";
                }
                $password = $con->real_escape_string(test_input($_POST["password"]));
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $bool = true;
                
                $query = mysqli_query($con,"SELECT * FROM users");
                while($row = $query->fetch_assoc())//display all rows from query
                {
                    $table_email = $row["email"]; //firstname is passed on to table_users, and so on until query is 
                    $table_phonenumber = $row["phonenumber"];
                    $table_username = $row["username"];
                    if($email == $table_email)//checks if there are any matching fields
                    {
                        $bool = false;
                        $email_error = "Email registered to a user exists";
                        break;
                        
                    }
                    if($phonenumber == $table_phonenumber)
                    {
                        $bool = false;
                        $phonenumber_error = "phone registered to an existing user";
                        break;
                        
                    }
                    if($username == $table_username && $username!='admin')
                    {
                        $bool = false;
                        $username_error = "Username already exists";
                    }
                }
                if($username == 'admin'){
                    $admin = 'true';
                }else{
                    $admin = 'false';
                }
                if($bool AND $admin=='false') //checks if bool is true
                {
                    $hash = md5( rand(0,1000) );
                    $add_user_query = "INSERT INTO users (firstname, lastname, othername, email, verified, country, phonenumber, username, password, Registration_date,randhash,admin) 
                    VALUES('$firstname', '$lastname', '$othername', '$email',0 ,'$country','$phonenumber','$username','$hashed_password',NOW(),'$hash','$admin')";
                    $results = mysqli_query($con, $add_user_query);
                    $to = $email; //send email to user
                    $subject = 'Verify your email';
                    $message = '
Welcome to Camp-Freedom!
You have successfully taken your ultimate invenstment step. One final step, please click the link below to verify your account with the following credentials. If this is not you simply ignore.
----------------------------------------
Username : '.$username.'
Password : '.$password.'
-----------------------------------------
                    
please follow this link to activate your account and start making investments right away:

NB: If link is not highlighted copy paste the url below on your favourite browser to verify your account.


http://www.clubfreedom.co/verify.php?email='.$email.'&hash='.$hash.'
';


                    $headers = 'From:noreply@campfreedom.co'. "\r\n";//set from headers
                    mail($to,$subject,$message,$headers);
                    $_SESSION["username"] = $username;
                    header('location:homepage.php');
                } elseif
                ($bool AND $admin=='true') {
                    $hash = md5( rand(0,1000) );
                    $add_user_query = "INSERT INTO users (firstname, lastname, othername, email, verified, country, phonenumber, username, password, Registration_date,randhash,admin) 
                    VALUES('$firstname', '$lastname', '$othername', '$email',0 ,'$country','$phonenumber','$username','$hashed_password',date('h:i:sa'),'$hash','$admin')";
                    $results = mysqli_query($con, $add_user_query);
                    $to = $email; //send email to user
                    $subject = 'Verify your email';
                    $message = '
Welcome to Camp-Freedom!
You have successfully taken your ultimate invenstment step. One final step, please click the link below to verify your account with the following credentials. If this is not you simply ignore.
----------------------------------------
Username : '.$username.'
Password : '.$password.'
-----------------------------------------

please follow this link to activate your account and start making investments right away:
http://www.clubfreedom.co/verify.php?email='.$email.'&hash='.$hash.'
';
                    $headers = 'From:noreply@campfreedom.co'. "\r\n";//set from headers
                    mail($to,$subject,$message,$headers);
                    $_SESSION["username"] = $username;
                    header('location: admin-homepage.php');
                        // echo "Error: " . $results. "<br>" . $con->error;
                    }
                    else{
                        header('location:index.php');
                    }
                    
                    //$con->close();
                }
                
   
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
                 

  ?>