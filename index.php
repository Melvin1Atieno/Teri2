<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Money solutions</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="static/css/mycss.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open Sans" rel="stylesheet">
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
                            <a href="#"data-toggle="modal" data-target="#registermodal">Register</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#loginmodal" >Login</a>
                        </li>
                        <li>
                            <a href="#">Leaderboard</a>
                        </li>
                        <li>
                            <a href="#">contact us</a>
                        </li>
                    </ul>
                </div>
             </div>
        </nav>
        
        <div id="section" class="container">
            <div class="text">
                <p>Creating<span class="highlight">lasting value</span> <br>
                    through experience<br>
                    and engagement.<br>
                    
                    <p>Read More...</p><br><hr>
                </p>
                <button data-toggle="modal" data-target="#registermodal"  class="btn btn-success">Register</button>
                <button data-toggle="modal" data-target="#loginmodal" class="btn btn-info">Login</button>
            </div>
        </div>
        
        <!-- our services section -->
        <div class="container-fluid">
            <h2 class="section-title"><strong>Our services</strong></h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="service">
                        <h3><strong>Loans</strong></h3>
                         Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor 
                         incididunt ut labore et dolore magna aliqua
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service">
                        <h3>
                            <strong>Saving options</strong>
                        </h3>
                        Lorem ipsum dolor sit amet, consectetur 
                        adipiscing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service">
                        <h3>
                            <strong>Lenders platform</strong>
                        </h3>
                        Lorem ipsum dolor sit amet, consectetur
                         adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolore magna aliqua
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <footer class-"footer" style="margin: 5em 0em 1em 0em;">
            <div class="container" style="padding-left:0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="wrapper"style="background-color:#ecf0f1; padding: 1em 2em;">
                            <h3><strong>Quick Links</strong></h3>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>
                                    <a href="#">Portfolio</a>
                                </li>
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Partners</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wrapper" style="background-color:#ecf0f1; padding: 1em 2em;">
                            <h3>
                                <strong>Follow Us</strong>
                            </h3>
                            <ul>
                                <li>
                                    <a href="#">Facebook</a>
                                </li>
                                <li>
                                    <a href="#">Twitter</a>
                                </li>
                                <li>
                                    <a href="#">Instagram</a>
                                </li>
                                <li>
                                    <a href="#">YouTube</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row" style="text-align: center; padding: 1em; margin: 1em 0; background-color:#ecf0f1;"> All Rights Reserved Â©. MelvinAtieno 2018.
                    </div>
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
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="password here">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
        <!-- register modal -->
        <div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">close</span>
                        </button>
                        <h4 class="modal-title" id="registerModalLabel">Register</h4>
                    </div>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="Email" class="form-control" id="email" placeholder="enter email here">
                        </div>
                        <div class="form-group">
                            <label for="phonenumber">Phone number</label>
                            <input type="number" class="form-control" id="phonenumber" placeholder="phonenumber">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="preferred username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="password here">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
