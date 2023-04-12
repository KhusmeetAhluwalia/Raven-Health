<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>


      .head {
        width: 542px;
        margin: 90px auto 0px;
        color: orange;
        background: black;
        text-align: center;
        border: 2px solid black;
        border-bottom: none;
        border-radius: 10px 10px 3px 3px;
        padding: 20px;
      }
        #a{
            margin: 0px auto;
            border: 2px solid black;
            background: grey;
            border-radius: 0px 0px 10px 10px;
            height:305px;
        }
        #img{
            height:250px;
            width: 300px;
        }
        .card-body{
            margin-top: 85px;
        }
        button{
            width: 207px;
            height: 50px;
            font-size: large;
          }
        a{
            text-decoration: none;
            color: black;
        }
        #bn{
          background-color: #B22222;
        }
        #bt{
          background-color: #8B0000;
        }
        a:hover{
          color: orangered;
        }
        b{
          color:white;
        }
    </style>
</head>
<body>
<div class="head">
    <h2>Welcome Raven</h2>
</div>
    <div id="a" class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div id="img" class="col-md-4">
            <img src="carl.jpg" class="img-fluid rounded-start" alt="...">
          </div>

          <div  class="col-md-4">
            <div class="card-body">
              <button id="bn"><a href="index.php"><b>Login</b></a></button><br><br>
              <button id="bt"><a href="register.php"><b>Sign-up</b></a></button>
            </div>
          </div>

        </div>
      </div>
</body>
</html>