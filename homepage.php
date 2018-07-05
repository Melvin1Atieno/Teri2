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
                        <li>
                            <a href="#" =>Home</a></li>
                        <li>
                            <a href="leaders.php">Leaderboard</a>
                        </li>
                        <li>
                            <a href="#">contact us</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#loginmodal" >Logout</a>
                        </li>
                    </ul>
                </div>
             </div>
        </nav>
        <div class="header container-fluid" >
            <div class="row">
                <div class="col-md-3">
                    <h4>your ultimate <span class="highlight">Investment</span> company</h4><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <ul class=" header-items">
                        <li>
                            <button class="btn btn-primary btn-sm" href="#"><i class="fa fa-facebook"></i>FaceBook</button>
                        </li><br>
                        <li>
                            <button class="btn btn-info btn-sm" href="#"><i class="fa fa-twitter"></i>Twitter</button>
                        </li><br>
                        <li>
                            <button class="btn btn-sm" style="background-color:rgb(233, 22, 92);" href="#"><i class="fa fa-instagram"></i>Instagram</button>
                        </li><br>
                        <li>
                            <button class="btn btn-danger btn-xm" href="#"><i class="fa fa-youtube"></i>YouTube</button>
                        </li><br>
                    </ul>
                </div>
            </div>
        </div>
        <div class="investments container-fluid ">
            <h2>MY INVESTMENT PLANS</h2><br><br>
            <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#cinvestments">current investments</a></li>
                <li><a data-toggle="pill" href="#investors">My Investors</a></li>
                <li><a data-toggle="pill" href="#notifications">Notifications</a></li>
                <li><a data-toggle="pill" href="#messages">Messages</a></li>
            </ul>
            <div class="tab-content">
                <div id="cinvestments" class="tab-pane fade in active">
                    <h3>My Investments</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Package</th>
                                <th>package Tye</th>
                                <th>Amount</th>
                                <th>state</th>
                                <th>Expected Earnings</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Leve 1 </td>
                                <td>gold</td>
                                <td>ksh10,000</td>
                                <td>Paid</td>
                                <td>ksh20,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="investors" class="tab-pane fade">
                    <h3>My Investors</h3>
                    <p>list of your investors, their details and payment state </p>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Amount</th>
                                <th>Payment Method</th>
                                <th>phone number</th>
                                <th>payment state</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Simba 1</td>
                                <td>ksh10,000</td>
                                <td>Bank</td>
                                <td>07187651651</td>
                                <td><button class="btn btn-danger btn-sm">Paid</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="notifications" class="tab-pane fade">
                    <h3>My Notifications</h3>
                    <p>No new notifications</p>
                </div>
                <div id="messages" class="tab-pane fade">
                    <h3>My messages</h3>
                    <p>Direct massages from admin and investors</p>
                </div>
            </div>
        </div>
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
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script src="form-helpers/js/bootstrap-formhelpers.min.js"></script> 
    </body>
</html>