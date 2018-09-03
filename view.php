<?php
require('config.php');
session_start();
if(isset($_GET['view'])){
    $id = (int)$_GET['view'];
    $query = mysqli_query($con, "SELECT *  FROM investments WHERE InvestmentID=$id ");
    while ($row = $query->fetch_assoc()){
        if($row['Evidence'] == NULL){
            include('load.php');
            echo "<div style='margin-left=50%';width=50%>
                    <p>No evidence to display</p>
                    </div>";
                }
                else{
                    echo "<img style='width:40%;height:40%'src='static/images/".$row["Evidence"]."' alt='default profile pic'>";
                }
            }
    }
?>