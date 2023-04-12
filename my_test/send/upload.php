<?php
$server ="localhost";
$username ="root";
$password ="";
$database ="god";

$conn =mysqli_connect($server,$username,$password,$database);
if(isset($_POST["upload"]))
{
    $password=$_POST['password'];
    $pname=$_FILES['myfile']['name'];
    $tname=$_FILES['myfile']['tmp_name'];
    move_uploaded_file($tname,"files/".$pname);
    $sql="INSERT into data(HealthCard,File) VALUES('$password','$pname')";
    if(mysqli_query($conn,$sql))
    {
        echo"File Successfully uploaded";
    }
    else{
        echo"error";
    }     
}
?>
<html>
    <head>
        <title>Upload </title>
     <style>
    .head {
  width: 30%;
  margin: 50px auto 0px;
  color: red;
  background: black;
  text-align: center;
  border: 2px solid black;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
h2{
  font-size: 30px;
}
form{
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 2px solid black;
  background: white;
  border-radius: 0px 0px 10px 10px;
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
  background: #DE2E12;
  border: none;
  border-radius: 5px;
}
.btn:hover{
    background: gray;
    color:white;
}
 </style>
    </head>
    <body>
    <div class="head">
    <h2>Upload Data</h2>
</div>
        <form action="upload.php" method="post" enctype="multipart/form-data" id='loginForm'>
            
        <input type="file" name="myfile"><br><br>
        
            <div class="input-group">
            <label for="password"><b>Health Card Number: </b></label>
            <input type="password" name="password"><br>
            </div>
            <input type="submit" class="btn" name="upload" value="Upload">
        </form>
    </body>
</html>