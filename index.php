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
        <meta name="keyword" content="Investments">
        <meta name="keyword" content="QuickMoney">
        <meta name="keyword" content="Freedom">
        <meta name="descriptiom" content="Club Freedom, Quick Money, Investment opportunities">
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
        <link rel="stylesheet" type="text/css" href="https://csshake.surge.sh/csshake.min.css">
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
                <p>CREATING <span class="highlight">LASTING VALUE</span> <br>
                <p>CHOOSE <span class="highlight">FREEDOM</span> <br>
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
                                <p>Club Freedom is an online pyramid network.<br>
                                  A platform where you get to connect to positive and great minds.<br>
                                  To selflessly invest in each others dream and vision.<br>
                                    <p class="highlight">THINK BIG!!!</p><br><hr>
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <p> At club freedom we are aimed to break every shackles of poverty.<br>
                                    To overhaul and empower  individual standards of living. <br> 
                                    Everything is simplified and straightforward. <br>  
                                    <p class="highlight">THINK FREEDOM!!!!</p><br><hr>
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <p>Club freedom grants high fliers<br>
                                    the pedestal to super soar<br>
                                    The sky is just the starting point.<br>
                                    <p class="highlight" >THINK RICH...get RICHER!!.</p><br><hr>
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
            <h2 class="section-title"><strong>HOW IT WORKS</strong></h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="service panel-group">
                            <div class="panel panel-success">
                                <div class="panel-heading">The catch?</div>
                                <div style="color:red; margin:5%">
                                   1. Make 200% return on investment within 72 hours time line from the hour you invested.<br><br>
                                   2. You secure 5% of your downliners per head for life, as referral bonus.
                                        Automatically become a country representative with 100 downliners and get paid monthly bonuses for life!<br><br>
                                   3. Simply recommit after 24 hours or your user account will be permanently deleted.<br><br>
                                   4. Defaulters and participants who upload Fake POP will be permanently deleted after proper investigation by support team!<br><br>
                                </div>
                                <button class="service btn btn-success"><a href="#" data-toggle="modal" data-target="#registermodal" >start</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div style="margin:10% 10% 10% 16%">
                            <p id='started' class='highlight'>
                            Watch your money grow, Fast!!! <br>
                            We value your time <br>
                            We know you do too<br>
                            Get started with three Easy steps!!</p>
                            <i  class="fa fa-hand-o-down shake-constant shake-vertical" style="font-size:56px;color:green;padding:5%; "></i>
                        </div>  
                    </div>
                </div>
                <div class="col-md-8">
                    <img src="static/images/moneytime.jpg" style="width:100%;height:20%; margin-right:0px;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="service panel-group">
                        <div class="panel panel-success">
                            <div class="panel-heading">STEP 1</div>
                            <div>
                                <p class="highlight step">Sign Up</p>
                                <i class="fa fa-sign-in-alt"></i>
                            </div>
                            <button class="service btn btn-success"><a href="#" data-toggle="modal" data-target="#registermodal" >start</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"style = "padding:5%;">
                    <i  class="fa fa-hand-o-right shake-horizontal shake-constant shake-constant--hover" style="font-size:56px;color:green"></i>
                </div>
                <div class="col-md-3">
                    <div class="service panel-group">
                        <div class="panel panel-success">
                            <div class="panel-heading">STEP 2</div>
                            <div>
                                <p class="highlight step" >Verify Your Account</p>
                            </div>
                        <button class="service btn btn-success"><a href="#"data-toggle="modal" data-target="#registermodal" >start</a></button>
                    </div>
                </div>
            </div>
            <div class="col-md-1"style = "padding:5%;" >
                <i class="fa fa-hand-o-right shake-slow shake-constant shake-horizontal shake-constant--hover " style="font-size:56px;color:green "></i>
            </div>
            <div class="col-md-3">
                <div class=" service panel-group">
                    <div class="panel panel-success">
                        <div class="panel-heading">STEP 3</div>
                        <div>
                            <p class="highlight step"> Choose an Investment Package</p>
                            <!-- <p class="highlight step"> Wait for returns</p> -->
                        </div>
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
