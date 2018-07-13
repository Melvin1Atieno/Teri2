<?php require('registration.php') ?>
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
                        <li><a href="index.php" =>Home</a></li>
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
                            <a href="contact.php">contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="section" class="container">
            <div class="text">
                <p>Creating <span class="highlight">lasting value</span> <br>
                    <br><hr style="margin-top:0">
                </p>
                <button data-toggle="modal" data-target="#registermodal"  class="btn btn-success">SignUp</button>
                <button data-toggle="modal" data-target="#loginmodal" class="btn btn-info">Login</button>
                <hr>
            </div>
            <h3 style="margin-left:20%">What we do</h3>
            <div id="info-section">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target ="#myCarousel" data-slide-to="2"></li>
                    </ol> 
                    <div class="carousel-inner">
                        <div class="item active">
                            <div>
                                <p>Creating a lasting value<br>
                                    through experience<br>
                                    and engagement.<br>
                                    <p>Read More...</p><br><hr>
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <p>Creating a lasting value<br>
                                    through experience<br>
                                    and engagement.<br>
                                    <p>Read More...</p><br><hr>
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <p>Creating a lasting value<br>
                                    through experience<br>
                                    and engagement.<br>
                                    <p>Read More...</p><br><hr>
                                </p>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        
        
        <!-- our services section -->
        <div class="container-fluid">
            <h2 class="section-title"><strong>Available Packages</strong></h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="service panel-group">
                        <div class="panel panel-success">
                            <div class="panel-heading">Level 1</div>
                            <div id="gone" class="level-one panel-body service"><a href="#"data-toggle="modal" data-target="#infomodal">Gold<br>
                                ksh 10,000</a>
                            </div>
                            <div  id="sone" class="level-two panel-body service"><a href="#"data-toggle="modal" data-target="#infomodal">Silver<br>
                                ksh 5000</a>
                            </div>
                            <div id="bone" class="level-three panel-body service"><a href="#"data-toggle="modal" data-target="#infomodal">Bronze<br>
                                ksh 3000</a>
                            </div>
                            <button class="service btn btn-success"><a href="#" data-toggle="modal" data-target="#registermodal" >start</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service panel-group">
                        <div class="panel panel-success">
                            <div class="panel-heading">Level 2</div>
                            <div id="gtwo" class="level-one panel-body service"><a href="#"data-toggle="modal" data-target="#infomodal">Gold<br>
                            Ksh 50,000</a>
                        </div>
                        <div id="stwo" class="level-two panel-body service"><a href="#"data-toggle="modal" data-target="#infomodal">Silver<br>
                        ksh 30,000</a></div>
                        <div id="btwo" class="level-three panel-body service"><a href="#"data-toggle="modal" data-target="#infomodal">Bronze<br>
                        ksh 20,000</a></div>
                        <button class="service btn btn-success"><a href="#"data-toggle="modal" data-target="#registermodal" >start</a></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class=" service panel-group">
                    <div class="panel panel-success">
                        <div class="panel-heading">Level 3</div>
                        <div id="gthree"class="level-one panel-body service"><a href="#"data-toggle="modal" data-target="#infomodal">Gold<br>
                        150,000</a><br>
                    </a></div>
                    <div id="sthree"class="level-two panel-body service"><a href="#"data-toggle="modal" data-target="#infomodal" >Silver<br>ksh 100,000</a></div>
                    <div id="bthree"class="level-three panel-body service"><a href="#"data-toggle="modal" data-target="#infomodal">Bronze<br>
                    ksh 70,000</a></div>
                    <button class="service btn btn-success"><a href="#"data-toggle="modal" data-target="#registermodal">start</a></button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- footer -->
    <footer class-"footer" style="margin:0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <div>
                        <h3><strong>ECONOMY-MIST</strong></h3>
                        
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
                                <strong>Contact US</strong>
                            </h3>
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="email-us">Email Us</label>
                                    <textarea type="text" class="form-control" id="email-us" placeholder="Enter text here"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row" style="text-align:center;"> All Rights Reserved Â©. MelvinAtieno 2018.
                    </div>
                </div>
            </footer>
            <!-- login form modal -->
            <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">close</span>
                            </button>
                            <h4 class="modal-title" id="LoginModalLabel">Login</h4>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars("login.php");?>">
                            <div class="form-group">
                                <label for="lusername">Username</label>
                                <input type="text" class="form-control" id="lusername" name="lusername" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="lpassword">Password</label>
                                <input type="password" class="form-control" id="lpassword" name="lpassword" placeholder="password here">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                            <div class="form-group">
                                <p>Don't have an account? <a style="color:green; font-size:200%; text-decoration=none;" href="#" data-toggle="modal" data-target="#registermodal" data-dismiss="modal">Register Now here</a>.</p>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        <!-- more info on package modal -->
        <div class="modal fade" id="infomodal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">close</span>
                        </button>
                        <h4 class="modal-title" id="LoginModalLabel"><span class="highlight">Economy-</span>mist</h4>
                    </div>
                </div>
                <div class="modal-body">
                    <p>100% returns<br>
                        You think the deal is too good!!<br>
                        Try Us!!!!<br>
                        100% returns<br>
                        You think the deal is too good!!<br>
                        Try Us!!!!<br>
                        <?php 
                        require("load.php") ?>
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success"><a href="#" data-toggle="modal" data-target="#registermodal">Start</a></button>
                </div>
            </div>
        </div>
        <!-- more info on packages modal-->
        <!-- register modal -->
        <div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">close</span>
                        </button>
                        <h4 class="modal-title" id="registerModalLabel">SignUp</h4>
                    </div>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on">
                        <div class="form-group">
                            <label for="firstname">First Name 
                            <span style="color:red">*<?php echo $firstname_error;?></span></label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter Firstname" required>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name 
                             <span style="color:red">*<?php echo $lastname_error?></span> </label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Lastname" required>
                        </div>
                        <div class="form-group">
                            <label for="othername">Other name
                            <span style="color:red"><?php echo $othername_error;?></span></label>
                            <input type="text" class="form-control" id="othername" name="othername" placeholder="optional">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email
                            <span style="color:red">*<?php echo $email_error;?></span></label><br>
                            <input type="Email" class="form-control" id="email"  name="email" placeholder="enter email here" required>
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select id="countries_phone1" class="form-control bfh-countries" name="country" data-country="KE"></select>
                        </div>
                        <div class="form-group">
                            <label for="phonenumber">Phone number 
                            <span style="color:red">*<?php echo $phonenumber_error?></label>
                            <input type="text" class="form-control bfh-phone" data-country="countries_phone1" name="phonenumber" required>
                            </br>
                        </div>
                        <div class="form-group">
                           <label for="username">Username 
                           <span style="color:red">*<?php echo $username_error ?></label>
                           <input type="text" class="form-control" id="username" name="username" placeholder="preferred username"required>
                           </br>
                        </div>
                        <div class="form-group">
                            <label for="password">Password 
                            <span style="color:red">*</span></label>
                            <input type="password" class="form-control" id="password" name="password"   minlength='8'   placeholder="password here" required>
                        </div>
                        <div class="form-group">
                            <label for="refereal">Referral</label>
                            <input type="text" class="form-control" id="referall" name="referall" minlength='10' placeholder="Referral code if any">
                        </div>
                        <div>
                            <input type="submit" class="btn btn-success">
                            <input type="reset" class="btn btn-default" value="Reset">
                        </div>

                        <div>
                            <p>Already have an account? <a style="color:green; font-size:200%; text-decoration=none;" href="#" data-toggle="modal" data-target="#loginmodal" data-dismiss="modal">Login here</a>.</p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="form-helpers/js/bootstrap-formhelpers.min.js"></script>
    </body>
    
</html>
