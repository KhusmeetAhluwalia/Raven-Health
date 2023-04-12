<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'dbconnect.php';
    $username=$_POST["username"];
    $email=$_POST["email"];
    $age=$_POST["age"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];

   // Check whether the username Exits
    $existSql="SELECT * FROM users WHERE username ='$username'";
    $result=mysqli_query($conn, $existSql);
    $numExistRows=mysqli_num_rows($result);
    if($numExistRows>0){
     // $exists=true;
     $showError="Username already exists";
    }
    else{
     // $exists=false;
      if($password==$cpassword){
        $sql="INSERT INTO `users` (`Username`, `Email`, `Age`, `Password`) VALUES
         ('$username', '$email', '$age', '$password')";
         $result=mysqli_query($conn, $sql);
         if($result){
            $showAlert=true;
         }
    }
    else{
        $showError="Passwords do not match";
    }
}
}

?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"crossorigin="anonymous">
 <title>Sign-Up</title>
 <style>
    .head {
  width: 30%;
  margin: 10px auto 0px;
  color: orange;
  background: black;
  text-align: center;
  border: 1px solid black;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form{
  width: 30%;
  margin: 0px auto 3px;
  padding: 20px;
  border: 2px solid black;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
img{
  height: 130px ;
  width: 130px;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;

  border: 2px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #B22222;
  border: none;
  border-radius: 5px;
}
.btn:hover{
    background: gray;
    color: white;
}
div[class="alert"]{
  display: none;
}
a{
  text-decoration: none;
  border: 2px solid #5F9EA0;
  background-color: #5F9EA0;
  padding: 7px;
  border-radius: 7px;
  color: white;

  margin-top: 3px;
}
a:hover{
  color:black;
}
 </style>
</head>
<body>
    <?php
    if($showAlert){
    echo '
<div class="alert alert-success alert-dismissible fade show" role="alert" style="display:block">
  <strong>Success!</strong> Your account is now created and you can log in
</div>';
    }
    if($showError){
        echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display:block">
      <strong>Error!</strong> '.$showError.'
    </div>';
        }
?>
<div class="head">
    <h2>SIGN UP</h2>
</div>
    <form action="register.php" method="post">
      <img src="sign1.png" alt="">
<div class="input-group">
    <label for="username"><b>Username:</b> </label>
    <input type="text" placeholder="Username" id="username" name="username" required>
</div>

<div class="input-group">
    <label for="email"><b>Email:</b> </label>
    <input type="email" placeholder="Email" id="email" name="email" required>
</div>

<div class="input-group">
    <label for="age"><b>Age: </b></label>
    <input type="age" placeholder="Age" id="age" name="age" required>
</div>

<div class="input-group">
    <label for="password"><b>Password:</b> </label>
    <input type="password" placeholder="Password" id="password" name="password" required>
</div>

<div class="input-group">
    <label for="cpassword"><b>Confirm Password: </b></label>
    <input type="password" placeholder="Confirm Password" id="cpassword" name="cpassword" required>
</div>
<div class="input-group">
<button  type="submit" class="btn">Sign-up</button>  
</div>
<?php
if($showAlert){
    echo '<a href="index.php">LOGIN</a>';
    }
    ?>
</form>
</body>
</html>