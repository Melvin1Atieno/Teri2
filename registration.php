<?php require_once ('config.php');
    session_start();

    $firstname_error = $lastname_error = $othername_error = $email_error = $phonenumber_error = $username_error ="";
    $firstname = $lastname = $othername = $email = $username = $phonenumber = "";
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
                        break;
                    }
                }
                if($bool) //checks if bool is true
                {
                    
                    $add_user_query = "INSERT INTO users (firstname, lastname, othername, email, country, phonenumber, username, password) 
                    VALUES('$firstname', '$lastname', '$othername', '$email', '$country','$phonenumber','$username',$password)";
                    // mysqli_query($con, $query);
                    if ($con->query($add_user_query) === TRUE) {
                        // echo "New user created successfully";
                        $_SESSION["username"] = $username;
                        $_SESSION["success"] = "You are now logged in";
                        header('location: homepage.php');
                    } else {
                        echo "Error: " . $add_user_query . "<br>" . $con->error;
                    }
                    // print '<script>alert("Successfully Resgistered")</script>';
                    // header("location:homepage.php");
                    // echo "<h2> Processing.....</h2";
                    $con->close();
                }
            }
            function test_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>