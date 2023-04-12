<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'dbconnect.php';
    $username=$_POST["username"];
    $password=$_POST["password"];
   
    $Sql="Select * from `users` where username ='$username' AND password='$password'";
    $result=mysqli_query($conn, $Sql);
    $num=mysqli_num_rows($result);
     if($num==1){
        $login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$username;
        header("location:login.php");
       }
    else{
        $showError="Invalid Credentials";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"crossorigin="anonymous">
 <title>Log in</title>
 <style>

    .head {
  width: 30%;
  margin: 50px auto 0px;
  color:orange;
  background: black;
  text-align: center;
  border: 1px solid black;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form{
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 2px solid black;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
img{
  height: 150px ;
  width: 150px;
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
 </style>

</head>
<body>
    <?php
    if($login){
    echo '
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You are logged in
</div>';
    }
    if($showError){
        echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> '.$showError.'
    </div>';
        }
?>
<div class="head">
    <h2>Raven's Health Data</h2>
</div>
    <form action="index.php" method="post" enctype="multipart/form-data">
      <img src="logo.jpg" alt="">
<div class="input-group">
    <label for="username"><b>Username:</b> </label>
    <input type="text" placeholder="Username" id="username" name="username" required>
</div>

<div class="input-group">
    <label for="password"><b>Password: </b></label>
    <input type="password" placeholder="Password" id="password" name="password" required>
</div>


<div class="input-group">
     <button  type="submit" class="btn">Log-in</button>
</div>


<p>
  		<b>Not yet a member? </b><a href="register.php">Sign up</a>
  	</p>

</form>
</body>
</html>