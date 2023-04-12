<?php
session_start();



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
            padding: 50px 80px 50px 100px;
            background-color:  #00CCFF;
            width:  100%;
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
        border: 1px solid  #00CCFF;    background-color: #00CCFF;         color:black ;
        float: right;     padding: 8px 20px 8px 20px;   margin-right: 70px;   margin-bottom: 200px;
        }
        a{
            text-decoration: none;
            color: #494F55;
            margin-left: 10px;
            font-size: 16px;
        }
        .btn:hover{
          background-color: #00CCFF;
          border: 1px solid  #00CCFF;
        }
      #colo{
          background-color: #00CCFF;
        }
        span p{
          margin: 0px 300px 0px 300px;
          font-weight: 700;
          font-size : 17px;
        }
 </style>

</head>
<body>
<table border="1">
        <tr>
            <td colspan="3"><div id="left"><p style="margin-left: 10px;">Raven's Health</p></div>
                <div id="right">
                   <p  style="margin-right: 10px;"> Welcome <?php echo  $_SESSION['username']; ?>  <a href="logout.php">Log out</a></p>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td id="middle">
                <div class="head">
                    <h2>Send Your Data to Physician</h2>
                </div>




    <form action="demo.py" method="POST" id="loginForm">
      
    <label for="username"> <b>FITBIT_USERNAME:</b> </label>
    <input type="text" placeholder="Username" id="username" name="username" required>



    <label for="password"> <b>FITBIT_PASSWORD:</b> </label>
    <input type="password" placeholder="Password" id="password" name="password" required>


    <label for="text"><b>Patient's Health Card Number:</b> </label>
    <input type="text" placeholder="Patient's Health Card Number" id="text" name="health" required>

    <label for="CID"><b>Physician's ID:</b> </label>
    <input type="text" placeholder="Physician's ID" id="CID" name="CID" required>

    
     <button  type="submit" class="btn" id="run-button" >Submit</button>  


</form>
</td>
            <td> </td>
        </tr>
    </table>






</body>
</html>



