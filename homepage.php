<?php require('config.php');
    session_start();
    // header("Refresh:3; url=homepage.php");
    if(!isset($_SESSION['username'])){
        header('location: index.php');
        
    }?>
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
                        <li>
                            <a href="homepage.php">Home</a>
                         </li>
                        <li>
                            <a href="leaders.php">Leaderboard</a>
                        </li>
                        <li>
                            <a href="contact.php">contact us</a>
                        </li>
                        <li>
                            <a id="logout" href="logout.php">Logout</a>
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
                <div class="col-md-6">
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
                <div class="col-md-6">
                    <button class="btn btn-primary bt-lg">Edit your profile</button>
                </div>
            </div>
        </div>
        <div class="investments container-fluid ">
            <h2>MY INVESTMENT PLANS</h2><br><br>
            <!-- timer function -->
            <?php $username = $_SESSION['username'];
            // header("Refresh:0; url=homepage.php");
            $query = mysqli_query($con,"SELECT * FROM users WHERE username = '$username'");
            while ($row = $query ->fetch_assoc()){
                $registrationtime  = $row['Registration_date'];
                // $timenow = date("Y-m-d H:i:s");
                $registrationtime = date_create($registrationtime);
                $timenow = date_create();
                $diff = date_diff( $registrationtime, $timenow );
                if($diff->h>24 and $diff->i>59 and $diff->s){
                    $dquery = mysqli_query($con, "DELETE * FROM users WHERE username=$username ");
                    $dmatch = mysqli_query($con, "DELETE * FROM matches WHERE ToBePaidBy= $username OR ToBePaidTo=$username");
                }else{

                    $mquery = mysqli_query($con, "SELECT * FROM investemnts WHERE InvestorsUsername='$username' AND Paid='paid' ");
                    if(!$mquery){
                        echo "<p style=' color:rgb(134, 216, 12);;font-size:160%; margin-top:0'>Make an investment and make payments in 24 hours after registration or you will be removed from list.</p>";
                        echo "<p> You have been a user for:"."<span style='color:red'>". $diff->h."hours"." ".(60-($diff->i))." "."minitues and ".$diff->s."seconds"."</span>"."</p>"."<br>"; 
                        echo "<p style ='color:red; font-size:180%;'>You have  ".(24-$diff->h)."hours ".($diff->i)."minitues and ".(60-$diff->s)."seconds Left!!!!"."</p>";
                    }
                }

            }
            ?>
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
                                <th>package Type</th>
                                <th>Amount</th>
                                <th>Investment date</th>
                                <th>Match Username</th>
                                <th>Match Contcat Info<th>
                                <th>Paid</th>
                                <th>Expected Returns</th>
                                <th>Make Payment</th>
                                <th>Cancel Investment</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  
                            $NoOfMatchesFound = $InvestmentId='';
                            $username = $_SESSION['username'];
                            $Musername = 'not_found';
                            $Mphonenumber = '00000000';
                            $sql = "SELECT * FROM investments WHERE InvestorsUsername='$username'";
                            $records = mysqli_query($con,$sql);
                            while ($row = $records->fetch_assoc()){
                                    $InvestmentId = $row['InvestmentID'];
                                    $NoOfMatchesFound = $row['NoOfMatchesFound'];
                                    $fsql = "SELECT * FROM matches WHERE ToBePaidBy='$username'";
                                    $fresults = mysqli_query($con,$fsql);
                                    while ($frow = $fresults->fetch_assoc()){
                                        $Musername = $frow['ToPayTo'];
                                        $nsql = "SELECT * FROM users WHERE username='$Musername'";
                                        $nrecords = mysqli_query($con,$nsql);
                                        while ($nrow = $nrecords->fetch_assoc()){
                                             $Mphonenumber = $nrow['phonenumber'];
                                             if($NoOfMatchesFound == 1){
                                                 $Musername = 'not_found';
                                                 $Mphonenumber = 'no contact info';
                                             }else{
                                                $Musername = $frow['ToPayTo']; 
                                                $Mphonenumber = $nrow['phonenumber'];
                                             }
                                         }
                                        }
                                    
                                            echo "<tr>
                                                    <td>" . $row["PackageType"] ."</td>
                                                    <td>" . $row["Amount"]."</td>
                                                    <td>" . $row["InvestmentDate"]."</td>
                                                    <td>" . $Musername. "</td>
                                                    <td>" . $Mphonenumber ."</td>
                                                    <td>" . "</td>
                                                    <td>" . $row["Paid"]. "</td>
                                                    <td>" . $row["ExpectedReturns"]. "</td>
                                                    <td>" . "<button id='confirm'class='btn btn-success'><a style='color:white'href='#'data-toggle='modal' data-target='#makepaymentmmodal'>Confirm Payment made</a></button>" . "</td>
                                                    <td>" . "<button  onclick='deleteqry($InvestmentId)' class='btn btn-danger'><a  style='color:white'href='#'>Cancel Investment</a></button>" .   "</td>
                                                </tr>";
                                                }
                        ?>
                                                <script type="text/javascript">
                                                            function deleteqry(InvestmentId) {
                                                                alert('okay this point works')
                                                                window.location.replace('delete.php?rem=' + InvestmentId);
                                                             }
                                                </script> 
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
                                <th>phone number</th>
                                <th>payment state</th>
                                <th>Remove Investor</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  
                            $username = $_SESSION['username'];
                            $contactinfo = "";
                            $ToBePaidBy = "";
                            $sql = "SELECT * FROM investments WHERE InvestorsUsername='$username'AND Merged !=0 ";
                            $records = mysqli_query($con,$sql);
                            while ($row = $records->fetch_assoc()){
                                $InvestmentId = $row['InvestmentID'];
                                $query = mysqli_query($con,"SELECT * FROM matches where InvestmentID = '$InvestmentId'");
                                    while ($nrow = $query->fetch_assoc()){
                                        $ToBePaidBy = $nrow['ToBePaidBy'];
                                        $Isql = "SELECT * FROM users where username='$ToBePaidBy'";
                                        $Iresults = mysqli_query($con,$Isql);
                                        while ($Irow = $Iresults ->fetch_assoc()){
                                            $contactinfo = $Irow['phonenumber'];
                                        }
                                        echo 
                                            "<tr>
                                                <td id='tobepaidby'>" .$ToBePaidBy . "</td>
                                                <td>" . $row["Amount"]."</td>
                                                <td>" . $contactinfo."</td>
                                                <td>" . "<button id='confirm'class='btn btn-success'><a style='color:white' href='#'data-toggle='modal' data-target='#confirmmodal'>confirm Reception</a></button>". "</td>
                                                <td>". "<button class='btn btn-danger'><a style='color:white'href='#'>Remove Investor</a></button>"  ."</td>
                                            </tr>";
                                    }
                                }
                        
                         ?>
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

        <div class="container-fluid">
            <h2 class="section-title"><strong>Available Packages</strong></h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="service panel-group">
                        <div class="panel panel-success">
                            <div class="panel-heading">Level 1</div>
                            <div id="gone" class="level-one panel-body service"><a href="#">Gold<br>
                                ksh 10,000</a>
                            </div>
                            <div id="sone" class="level-two panel-body service"><a>Silver<br>
                                ksh 5000</a>
                            </div>
                            <div id="bone" class="level-three panel-body service"><a>Bronze<br>
                                ksh 3000</a>
                            </div>
                            <button class="service btn btn-success"> start</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service panel-group">
                        <div class="panel panel-success">
                            <div class="panel-heading">Level 2</div>
                            <div id="gtwo"class="level-one panel-body service"><a>Gold<br>
                                Ksh 50,000</a>
                            </div>
                            <div id="stwo" class="level-two panel-body service"><a>Silver<br>
                                ksh 30,000</a>
                            </div>
                            <div id="btwo"class="level-three panel-body service"><a>Bronze<br>
                                ksh 20,000</a></div>
                            <button type="submit" class="service btn btn-success"> start</button>
                         </div>
                     </div>
                </div>
                <div class="col-md-4">
                    <div class=" service panel-group">
                        <div class="panel panel-success">
                            <div class="panel-heading">Level 3</div>
                            <div id="gthree"class="level-one panel-body service"><a>Gold<br>
                                150,000</a>
                            </div>
                            <div id="sthree"class="level-two panel-body service"><a>Silver<br>ksh 100,000</a></div>
                            <div id="bthree"class="level-three panel-body service"><a>Bronze<br>
                                ksh 70,000</a></div>
                            <button class="service btn btn-success"> start</button>
                        </div>
                    </div>
                </div>
            </div>
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
                <div class="row" style="text-align:center;"> All Rights Reserved Â©. CLUB FREEDOM 2018.
                </div>
            </div>
        </footer>

        <!--confirm modal-->
        <div class="modal fade" id="confirmmodal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">close</span>
                        </button>
                        <h4 class="modal-title" id="confirmModalLabel"><span class="highlight">Confirm Payment</span></h4>
                    </div>
                </div>
                <div class="modal-body">
                <form>
                   <p>
                      <?php
                        $username = $_SESSION["username"];
                        echo "I "."$username"." CONFIRM I have received the said amount.";
                       ?>
                   </p>
                <button id="confirmbutton" type="submit" class="btn btn-success">Submit</button>
                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            </div>
        </div>
        <!--confirm modal-->
        <!--makepayment modal-->
        <div class="modal fade" id="makepaymentmmodal" tabindex="-1" role="dialog" aria-labelledby="makepaymentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">close</span>
                        </button>
                        <h4 class="modal-title" id="makepaymentModalLabel"><span class="highlight">Confirm you have made payment</span></h4>
                    </div>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="myFile">Upload payment evidence: </label>
                            <input class="form-control" type="file" id="myFile"name="myFile" placeholder="Add snapshot of payment receipt" required>
                        </div>
                        <div class="form-group">
                            <label for="paymentMethod">Payment Method </label>
                            <select  class="form-control" name="paymentMethod">
                                <option value="bank">Bank</option>
                                <option value="MobileTransfer">Mobile Transfer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="amountPaid">Amout Paid</label>
                            <input class="form-control" type="number" min="3000" step="1000" placeholder="amount paid" required>
                        </div>
                        <div class="form-group">
                            <label for="dateofpayment">Payment date: </label>
                            <input class="form-control" id="dateofpayment" name="dateofpayment" type="datetime-local" required>
                        </div><br>
                        <div class="form-group">
                            <input onclick="alert('Please wait as payment reception to be confirmed')" type="submit" value="Confirm" class="btn btn-success">
                            <input type="reset" value="Reset" class="btn btn-danger">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="close" data-dismiss="modal">
                        <span style="color:white"aria-hidden="true">&times;</span>
                        <span class="sr-only">close</span>
                    </button>
                </div>
            </div>
        </div>
        <!--makepayment modal-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      
       <script src="js/bootstrap.min.js"></script>
       <script src="js/process.js"></script>
       <script src="form-helpers/js/bootstrap-formhelpers.min.js"></script>
      
    </body>
</html>