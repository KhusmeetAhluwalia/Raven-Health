
<?php
session_start();



?>
<html>
<head>
        <title>Down </title>
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
            margin: 0px;    padding: 0px;
            width: 33.33%;  border: 2px solid black;
        }
        #middle{
            height:  92vh;
        }
        .head{
            font-size: 15px;
            padding: 50px 53px 50px 200px;
            background-color:  #FF5A5F;
            width: 60%;
            margin: 0px;
            margin-bottom: 150px;
            color: white;
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
        border: 1px solid  #FF5A5F;    background-color: #FF5A5F;         color:white ;
        float: right;     padding: 8px 20px 8px 20px;   margin-right: 70px;   margin-bottom: 335px;
        }
        a{
            text-decoration: none;
            color: #494F55;
            margin-left: 10px;
            font-size: 16px;
        }
        .btn:hover{
          background-color: #FF5A5F;
          border: 1px solid  #FF5A5F;
        }
        #msg{
          font-size: 18px;
            margin: 0px 30px 150px 200px;
            width: 80%;
            color: #494F55;
          display: none;
        }
        .visu{
          border: 1px solid  #FF5A5F;    background-color: #FF5A5F;         color:white ;
        float: right;     padding: 8px 31px 10px 31px;   margin-right: 120px;   margin-bottom: 335px;
        }
        .visu1{
          border: 1px solid  #FF5A5F;    background-color: #FF5A5F;         color:white ;
        float: right;     padding: 8px 20px 10px 20px;   margin-right: 120px;   margin-bottom: 335px;
        }
 </style>
    </head>
    <body>
    <table border="1">
        <tr>
            <td colspan="3"><div id="left"><p style="margin-left: 10px;">Raven's Health</p></div>
                <div id="right">
                   <p  style="margin-right: 10px;"> Welcome Dr. <?php echo  $_SESSION['username']; ?> <a href="logout.php">Log out</a></p>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td id="middle">
                <div class="head">
                    <h2>Download Patient Data</h2>
                </div>
        <div id="check">
        <form action="down2.php" method="post" enctype="multipart/form-data">
         
          
        
        <label for="password"><b>Patient's Health Card Number:</b></label>    
        <input type="text" name="password" placeholder="Patient's Health Card Number" required><br>
        

        
        <label for="CID"><b>Physician ID:</b></label>    
        <input type="text" name="CID" placeholder="Physician ID" required><br>
      </div>
        
        <p id="msg"><b>Patient's Health Data Received !!</b></p>
        
          <button  type="submit" name="upload" id="sub" class="btn">Submit</button> 
          
            <?php

             $login=false;
             if($_SERVER["REQUEST_METHOD"]=="POST"){
              $password1=$_POST["password"].".csv";
              $CID=$_POST["CID"];
            
              $_SESSION['CID']=$CID;
              $path="/xampp/htdocs/my_test/CSV/".$CID."/*.*";
              $fileinfo=glob($path);
              $checkname="/xampp/htdocs/my_test/CSV/".$CID."/".$password1;
              for ($x = 0; $x < sizeof($fileinfo); $x++)
              {   
                if($fileinfo[$x]==$checkname){
                  $login=true;
            ?>
            <?php
                      if($login){
                        echo "<script>
                        
                          document.getElementById('check').style.display='none';
                          document.getElementById('sub').style.display='none';
                          document.getElementById('msg').style.display='block';
                        </script>";
                        ?>
                        

                        <a class="visu" href="download.php?file=<?php echo  $password1;?>">  Download  </a>
                        
                       
                        
                        <a target= "_blank" href="http://localhost:3000/" class="visu1">Visualize Data</a></div>
                    <?php  
                    }
                      ?>        
            <?php  
                    }
                  ?>
                  <?php
              }
                    if(!$login)
                    {
                      echo "File Not found";
                    }
                  }
            ?>
        </form>
        </td>
            <td></td>
        </tr>
    </table>
    </body>
</html>



