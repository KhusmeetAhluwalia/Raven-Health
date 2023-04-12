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

#left{
            float: left;
        }
        #right{
            float: right;
        }
        table{
            border: 2px solid black;
            width: 100%;
            border-collapse: collapse;
        }
        tr{
            border: 2px solid black;
        }
        td{
            margin: 0px;    padding: 0px;
            width: 33.33%;  border: 2px solid black;
        }
        #middle{
            height: 92vh;
        }
        .head{
            font-size: 15px;
            padding: 50px 110px 50px 200px;
            background-color:  #00CCFF;
            width: 100%;
            margin: 0px;
            margin-bottom: 150px;
            color: black;
        }
        input{
            font-size: 14px;
            margin: 0px 30px 15px 60px;
            width: 80%;
            color: #494F55;
            height: 50px;
        }
        label{
            font-size: 18px;
            margin: 0px 30px 0px 60px;
            width: 80%;
            color: #494F55;
        }
        div p{
           font-size: 18px;
        }
       
        .btn{
            border: 1px solid  #00CCFF;
            background-color: #00CCFF;
            color:black ;
            float: right;
            padding: 8px 20px 8px 20px;
            margin-right: 70px;
            margin-bottom: 285px;
            
        }
        .btn:hover{
          background-color: #00CCFF;
          border: 1px solid  #00CCFF;
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
<table border="1">
        <tr>
            <td colspan="3"><div id="left"><p style="margin-left: 10px;">Raven's Health</p></div>
                <div id="right">
                   <p  style="margin-right: 10px;"> Welcome User! </p>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td id="middle">
                <div class="head">
                    <h2>Patient Sign In</h2>
                </div>
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <label for="username"><b>Username:</b> </label><br>
                    <input type="text" placeholder="Username" id="username" name="username" required><br><br>
                    
                    <label for="password"><b>Password: </b></label><br>
                    <input type="password" placeholder="Password" id="password" name="password" required><br><br>

                    <button  type="submit" class="btn">Submit</button>  
                </form>
            </td>
            <td></td>
        </tr>
    </table>
</body>
</html>