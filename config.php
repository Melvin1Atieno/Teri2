<?php 

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'teri');
define('DB_PASSWORD', 'Myno0790477292');
define('DB_NAME', 'economy-mist-db');
$con = new mysqli("localhost", "teri","Myno0790477292","economy-mist-db");
  

    //check connection
    if($con === false){
        die("ERROR: Could not connect." .$con->connect_error);
    }

?>