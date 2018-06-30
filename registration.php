<?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $con = mysqli_connect("localhost", "root","","economy-mist-db");
                
                //check connection
                if(mysqli_connect_errno()){
                    echo "Failed to connect to database: ".
                    mysqli_connect_errno();
                } //connect to server

                // mysqli_select_db() or die("cannot connect to database"); //connect to database

                $firstname = mysqli_real_escape_string($con, $_POST["firstname"]);
                $lastname = mysqli_real_escape_string($con, $_POST["lastname"]);
                $othername = mysqli_real_escape_string($con, $_POST["othername"]);
                $email = mysqli_real_escape_string($con, $_POST["email"]);
                $country = mysqli_real_escape_string($con, $_POST["country"]);
                $phonenumber = mysqli_real_escape_string($con, $_POST["phonenumber"]);
                $username = mysqli_real_escape_string($con, $_POST["username"]);
                $password = mysqli_real_escape_string($con, $_POST["password"]);
                $bool = true;

                $query = mysqli_query($con, "SELECT * FROM users");
                while($row = mysqli_fetch_array($query))//display all rows from query
                {
                    $table_users = $row["email"]; //firstname is passed on to table_users, and so on until query is 
                    $table_users = $row["phonenumber"];
                    $table_users = $row["username"];
                    if($email == $table_users)//checks if there are any matching fields
                    {
                        $bool = false;
                        print '<script>alert("Email registered to a user exists")</script>';

                    }
                    if($phonenumber == $table_users)
                    {
                        $bool = false;
                        print '<script>alert("phone registered to an existing user")</script>';

                    }
                    if($username == $table_users)
                    {
                        $bool = false;
                        print '<script>("Username already exists")</script>';
                    }
                }
                if($bool) //checks if bool is true
                {
                    mysqli_query($con,"INSERT INTO users(firsname,lastname,othername,email,country,phonenumber, username,password ) VALUES('$firstname','$lastname','$othername',
                    '$email','$country','$phonenumber','$username',
                    '$password')");
                    print '<script>alert("Successfully Resgistered")</script>';
                    echo "<h2> Registration successful</h2";
                }
            }
            ?>