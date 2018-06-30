<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Basic -->
        <meta charset = "utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- site Meta -->
        <title>Investors solutions</title>
        <meta name="keyword" content="">
        <meta name="descriptiom" content="">
        <meta name="author" content="">

    <!-- Site Icons -->
        <link rel="shortcut icon " href="#">

    <!-- Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Open Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 

    <!-- custom and default styles -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"rel="stylesheet">
        <link href="form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
        <link href="static/css/mycss.css" rel="stylesheet">

    </head>
    <body>
                <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- brand and toggle grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><span class="highlight">ECONOMY-</span>MIST</a>
                </div>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" =>Home</a></li>
                        <li>
                            <a href="#"data-toggle="modal" data-target="#registermodal">SignUp</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#loginmodal" >Login</a>
                        </li>
                        <li>
                            <a href="leaders.php">Leaderboard</a>
                        </li>
                        <li>
                            <a href="#">contact us</a>
                        </li>
                    </ul>
                </div>
             </div>
        </nav>
        <div>
        <!-- LOADER -->
        <img id="preloader"  class="preloader" src="static/images/loader.gif" alt="">
        <!--END-->
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="form-helpers/js/bootstrap-formhelpers.min.js"></script>
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

                $query = mysqli_query($con,"SELECT * FROM users");
                while($row = mysqli_fetch_array($query))//display all rows from query
                {
                    $table_users = $row["email"]; //firstname is passed on to table_users, and so on until query is 
                    $table_users = $row["phonenumber"];
                    $table_users = $row["username"];
                    if($email == $table_users)//checks if there are any matching fields
                    {
                        $bool = false;
                        print '<script>alert("Email registered to a user exists")</script>';
                        break;

                    }
                    if($phonenumber == $table_users)
                    {
                        $bool = false;
                        print '<script>alert("phone registered to an existing user")</script>';
                        break;

                    }
                    if($username == $table_users)
                    {
                        $bool = false;
                        print '<script>("Username already exists")</script>';
                        break;
                    }
                }
                if($bool) //checks if bool is true
                {
                    mysqli_query($con,"INSERT INTO users(firsname,lastname,othername,email, country,phonenumber,username, password ) VALUES('".$firstname."','".$lastname."','".$othername."',
                    '".$email."','".$country."','".$phonenumber."','".$username."',
                    '".$password."')");
                    // print '<script>alert("Successfully Resgistered")</script>';
                    // echo "<h2> Processing.....</h2";
                }
            }
            ?>
    </body>
</html>