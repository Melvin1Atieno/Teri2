<?php require_once ('config.php');
    session_start();

    $firstname_error = $lastname_error = $othername_error = $email_error = $phonenumber_error = $username_error ="";
    $firstname = $lastname = $othername = $email = $username = $phonenumber = $hash=$results= "";
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
                while($row = mysqli_fetch_array($query))//display all rows from query
                {
                    $table_users = $row["email"]; //firstname is passed on to table_users, and so on until query is 
                    $table_users = $row["phonenumber"];
                    $table_users = $row["username"];
                    if($email == $table_users)//checks if there are any matching fields
                    {
                        $bool = false;
                        $email_error = "Email registered to a user exists";
                        break;
                        
                    }
                    if($phonenumber == $table_users)
                    {
                        $bool = false;
                        $phonenumber_error = "phone registered to an existing user";
                        break;
                        
                    }
                    if($username == $table_users)
                    {
                        $bool = false;
                        $username_error = "Username already exists";
                    }
                }
                if($bool) //checks if bool is true
                {
                    $hash = md5( rand(0,1000) );

                    $add_user_query = "INSERT INTO users (firstname, lastname, othername, email, verified, country, phonenumber, username, password, Registration_date,randhash) 
                    VALUES('$firstname', '$lastname', '$othername', '$email',0 ,'$country','$phonenumber','$username','$hashed_password',NOW(),'$hash')";
                    $results = mysqli_query($con, $add_user_query);
                    $to = $email; //send email to user
                    $subject = 'Verify your email';
                    $message = '
Welcome to Economy-mist!
You have successfully taken your ultimate invenstment step. One final step, please click the link below to verify your account with the following credentials. If this is not you simply ignore.
----------------------------------------
Username : '.$username.'
Password :  '.$password.'
-----------------------------------------

please follow this link to activate your account and start making investments right away:
http://www.economy-mist.com/verify.php?email='.$email.'&hash='.$hash.'
';
$headers = 'From:noreply@economymist.com'. "\r\n";//set from headers
mail($to,$subject,$message,$headers);
                    } else {
                        echo "Error: " . $results. "<br>" . $con->error;
                    }
                    
                    $con->close();
                }
            
            function test_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>