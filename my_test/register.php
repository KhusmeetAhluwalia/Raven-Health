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
          height: 85vh;
        }
        .head{
            padding: 50px 200px 50px 200px;
            background-color: #004F98;
            width: 100%;
            margin: 0px;
            margin-bottom: 100px;
            color: white;
        }
        input{
            font-size: 14px;
            margin: 0px 30px 15px 60px;
            width: 80%;
            color: #494F55;
        }

        label{
          font-size: 14px;
            margin:  0px 30px 0px 60px;
            width: 80%;
            color: #494F55;
        }
        div p{
           font-size: 18px;
        }
        .btn{
            border: 1px solid  #004F98;
            background-color: #004F98;
            color:white ;
            float: right;
            padding: 8px 20px 8px 20px;
            margin-right: 70px;
            margin-bottom: 150px;
            
        }
        .btn:hover{
          background-color: #004F98;
          border: 1px solid  #004F98;
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
                    <h2>Create Account</h2>
                </div>
                <form action="register.php" method="post">
                    <label for="username">Username: </label>
                    <input type="text" placeholder="Username" id="username" name="username" required><br><br>
                    
                    <label for="email">Email Address: </label>
                    <input type="email" placeholder="Email" id="email" name="email" required><br><br>
                    
                    <label for="age">Age: </label>
                    <input type="age" placeholder="Age" id="age" name="age" required><br><br>
                    
                    <label for="password">Password: </label><br>
                    <input type="password" placeholder="Password" id="password" name="password" required><br><br>
             
                    <label for="cpassword">Confirm Password:</label><br>
                    <input type="password" placeholder="Confirm Password" id="cpassword" name="cpassword" required><br><br>
                    <button  type="submit" class="btn">Submit</button>  
                </form>
            </td>
            <td></td>
        </tr>
    </table>
<?php
if($showAlert){
    echo '<a href="index.php">LOGIN</a>';
    }
    ?>
</form>
</body>
</html>