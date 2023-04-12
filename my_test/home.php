<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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
            margin: 0px;
            border-collapse: collapse;
        }
        tr{
            border: 2px solid black;
        }
        td{
            width: 33.33%;  border: 2px solid black;
        }
        #middle{
            height: 94vh;
        }
        #register{
            font-size: 17px;
            text-decoration: none;
            padding: 15px 240px 15px 235px;
            background-color: #00BFFF;
            width: 100%;
            margin: 0px 10px 5px 25px;
            color: #494F55;
        }
        #new{
            font-size: 17px;
            margin: 0px 10px 15px 210px;
        }
        #return{
            font-size: 17px;
            margin: 0px 15px 15px 220px;
        }
        #login{
            font-size: 17px;
            text-decoration: none;
            padding: 15px 275px 15px 260px;
            background-color:#00FFEF;
            width: 100%;
            margin:0px 10px 5px 25px;
            color: #494F55;
        }
        div p{
           font-size: 18px;
        }
        button{
            border: 0px solid white;
            background-color: white;
            color:#494F55 ;
            margin-left: 3px;
        }
        img{
            margin-left: 35%;
            
        }
    </style>
</head>
<body>
<table border="1">
        <tr>
            <td colspan="3"><div id="left"><p style="margin-left: 10px;">Raven's Health</p></div>
                <div id="right">
                   <p  style="margin-right: 10px;"> Welcome User!  </p>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td id="middle">
                <img src="sign.png" alt="img">
                <p id="new">New user? Create Account Here</p><br>
                <a href="register.php" id="register">Create Account</a><br><br><br><br>
                <p id="return">Returning user? Sign In Here</p><br>
                <a href="index.php" id="login">Sign In</a>
            </td>
            <td></td>
        </tr>
    </table>
</body>
</html>