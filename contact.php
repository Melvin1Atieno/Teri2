
<?php
    session_start();
    require('config.php');
 ?>
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
                    <a class="navbar-brand" href="#"><span class="highlight">CLUB-</span>FREEDOM</a>
                </div>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="link.php" =>Home</a></li>
                        <li>
                            <a href="leaders.php">Leaderboard</a>
                        </li>
                        <li>
                            <a href="contact.php">contact us</a>
                        </li>
                        <li>
                            <a href="logout.php" >Logout</a>
                        </li>
                    </ul>
                </div>
             </div>
        </nav>
        <div class=" home-section container-fluid">
            <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div style="text-align:center">
                    <h2>Send Us an Email</h2><hr>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="your name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="your email">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="subject">
                </div>
                <div class="form-group">
                    <label for="password">Query</label>
                    <textarea type="text" class="form-control" name="query" id="query" placeholder="Enter your text here"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
            <?php
            if($_SERVER["REQUEST_METHOD"] === "POST"){
               $username = $_SESSION['username'];
               $useremail = $con->real_escape_string($_POST["email"]); 
               $to =    'info@clubfreedom.co';
               $subject = $con->real_escape_string($_POST["subject"]);
               $message = $con->real_escape_string($_POST["query"]);
               $headers = 'From:'.$username.$useremail;
               mail($to,$subject,$message,$headers);
            }
            ?>
        </div>
        <footer class-"footer" style="margin:0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        <div>
                            <h3><strong>CLUB-FREEDOM</strong></h3>
                            
                            <ul class="footer-items">
                                <li><a href="#">About Us</a></li>
                                <li>
                                    <a href="#">Testimonials</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">Latest News</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <h3>
                                <strong>CONNECT WITH US</strong>
                            </h3>
                            <ul class="footer-items">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i> Instagram</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i> YouTube</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <h3>
                                <strong>SUPPORT US</strong>
                            </h3>
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="email-us">Support Us</label>
                                    <textarea type="text" class="form-control" id="email-us" placeholder="Enter text here"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row" style="text-align:center;">All Rights Reserved Â©. CLUB FREEDOM 2018.
                </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="form-helpers/js/bootstrap-formhelpers.min.js"></script>
    </body>
</html>