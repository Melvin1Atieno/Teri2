<?php 

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'economy-mist-db');
$con = new mysqli("localhost", "root","","economy-mist-db");
  

    //check connection
    if($con === false){
        die("ERROR: Could not connect." .$con->connect_error);
    }

?>