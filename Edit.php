<?php
    session_start();
    require('config.php');
    require('menu.php');
    $firstname = $lastname = $othername= $email = $country = $username = $phonenumber = "";
    // header("Refresh:10; url=homepage.php");
    if(!isset($_SESSION['username'])){
        header('location: index.php');
        
} else{
    $username = $_SESSION['username'];
    $query = mysqli_query($con, "SELECT * FROM users WHERE username= '$username'");
    while ($row = $query ->fetch_assoc()){
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $othername = $row['othername'];
        $email = $row['email'];
        $country = $row['country'];
        $username = $row['username'];
        $password = $row['password'];
        $phonenumber = $row['phonenumber'];

    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
                $firstname = $con->real_escape_string($_POST["firstname"]);
                if(!preg_match("/^[a-zA-Z]*$/",$firstname)){
                    $firstname_error = "Only letters and white space allowed";
                }
                $lastname = $con->real_escape_string($_POST["lastname"]);
                if(!preg_match("/^[a-zA-Z]*$/",$lastname)){
                    $lastname_error = "Only letters and white space allowed";
                }
                $othername = $con->real_escape_string($_POST["othername"]);
                if(!preg_match("/^[a-zA-Z]*$/",$othername)){
                    $othername_error = "Only letters and white space allowed";
                }
                $email = $con->real_escape_string($_POST["email"]);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $email_error = "Invalid email format";
                }
                $country = $con->real_escape_string($_POST["country"]);
                $phonenumber = $con->real_escape_string($_POST["phonenumber"]);
                $username =  $con->real_escape_string($_POST["username"]);
                if(!preg_match("/^[a-zA-Z]*$/",$username)){
                    $username_error = "Only letters and white space allowed";
                }
                $password = $con->real_escape_string($_POST["password"]);
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $update =  mysqli_query($con, "UPDATE users SET firstname ='$firstname', lastname ='$lastname',othername='$othername', email ='$email',country = '$country',
                 phonenumber='$phonenumber', username ='$username', password='$hashed_password' WHERE username = '$username'");
    }
}
?>
<form style = "width:60%; margin:auto;"class="form-horizontal"  enctype="multipart/form-data"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on">
    <div>
       <div class="row">
           <div class="col-md-8">
                <h1>EDIT PROFILE</h1>
           </div>
           <div class="col-md-4">
               <button  class="btn btn-primary"> <a style="color:white" href=homepage.php> Back</a> </button>
           </div>
       </div>
    </div>
    <div class="form-group">
        <label for="firstname">First Name </label>
        <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $firstname; ?>" placeholder="Firstname">
    </div>
    <div class="form-group">
        <label for="lastname">Last Name </label>
        <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $lastname; ?>" placeholder="Enter Lastname">
    </div>
    <div class="form-group">
        <label for="othername">Other name</label>
        <input type="text" class="form-control" id="othername" name="othername" value="<?php echo $othername; ?>" placeholder="optional">
    </div>
    <div class="form-group">
        <label for="Email">Email</label><br>
        <input type="Email" class="form-control" id="email"  name="email" value="<?php echo $email; ?>"  placeholder="enter email here">
    </div>
    <div class="form-group">
        <label for="country">Country</label>
        <select id="countries_phone1" class="form-control bfh-countries" name="country" value="<?php echo $country;?>"  data-country="KE"></select>
    </div>
    <div class="form-group">
        <label for="phonenumber">Phone number </label>
        <input type="text" class="form-control bfh-phone" data-country="countries_phone1" name="phonenumber" value="<?php echo $phonenumber; ?>" >
        </br>
    </div>
    <div class="form-group">
        <label for="username">Username </label>
        <input type="text" class="form-control" id="username" name="username" placeholder="preferred username">
        </br>
    </div>
    <div class="form-group">
        <label for="password">Password </label>
        <input type="password" class="form-control" id="password" name="password"   minlength='8'   placeholder="password here" required>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Save">
        <input type="reset" class="btn btn-default" value="Reset">
    </div>
</form>