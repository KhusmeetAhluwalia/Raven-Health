<?php
$server ="localhost";
$username ="root";
$password ="";
$database ="god";

$conn =mysqli_connect($server,$username,$password,$database);
?>
<html>
<head>
        <title>Down </title>
        <style>
    .head {
  width: 30%;
  margin: 100px auto 0px;
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
img{
  height: 110px ;
  width: 110px;
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
  border-radius: 5px;
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
}
 </style>
    </head>
    <body>
    <div class="head">
    <h2>Download Patient's Data</h2>
</div>
        <form action="down.php" method="post" enctype="multipart/form-data">
          <img src="download.png" alt="">
        <div class="input-group">
        <label for="password"><b>Health Card Number:</b></label>    
        <input type="tel" name="password" placeholder="Health Card Number" required><br>
        </div>

            <input type="submit" class="btn" name="upload" value="Submit" >
            <?php
             $login=false;
             if($_SERVER["REQUEST_METHOD"]=="POST"){
              $password1=$_POST["password"];
          
              $Sql="Select * from `data` where HealthCard='$password1'";
              $result=mysqli_query($conn, $Sql);
              $num=mysqli_num_rows($result);
               if($num>0){ 
                  while($row=mysqli_fetch_assoc($result)){
                    $login=true;
                      ?>
                      <?php
                      if($login){
                        ?>
                        <a href="download.php?file=<?php echo $row['File'];?>">Download</a>
                    <?php  
                    }
                      ?>
                 <?php
                    }
                }
            }
            else {
              echo "";
               }
            ?>
        </form>
    </body>
</html>