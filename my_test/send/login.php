<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"crossorigin="anonymous">
 <title>Log in</title>
 <style>
    .head {
  width: 30%;
  margin: 50px 29.75% 0px;
  color: orange;
  background:black;
  text-align: center;
  border: 1px solid black;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form{
  width: 30%;
  margin: 0px 20px auto auto;
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
    background: grey;
    color: white;
}
span{
  margin-right: 23.6%;
  height: 500px;
  width: 300px;
  border:2px solid black;
  background: #B22222;
  color:white;
}
p{
  font-weight:700;
  text-align:center;
  font-size:26px;
}
#note{
  display:flex;
}
 </style>

</head>
<body>
<div class="head">
    <h2>Send Fitbit Data to Physician</h2>
</div>
<div id="note">

    <form action="demo.py" method="POST" id="loginForm">
      <img src="doctor.png" alt="">
<div class="input-group">
    <label for="username"> <b>FITBIT_USERNAME:</b> </label>
    <input type="text" placeholder="Username" id="username" name="username" required>
</div>

<div class="input-group">
    <label for="password"> <b>FITBIT_PASSWORD:</b> </label>
    <input type="password" placeholder="Password" id="password" name="password" required>
</div>
<div class="input-group">
    <label for="text"><b>Patient's Health Card Number:</b> </label>
    <input type="text" placeholder="Patient's Health Card Number" id="text" name="health" required>
</div>
<div class="input-group">
    <label for="CID"><b>Physician's ID:</b> </label>
    <input type="text" placeholder="Physician's ID" id="CID" name="CID" required>
</div>

<div class="input-group">
     <button  type="submit" class="btn" id="run-button">Send</button>  
</div>

</form>


<span> <p>Notes</p>

<hr> 
 
<ul>
    <li>Please fill all the entries in the form. </li>
    <br>
    <li>Make sure you put the right Physician's ID, so that it reaches the correct Physician. </li> <br>
    <li>Click "Send" to send your Health Data from your FitBit to your Physician. </li> <br>
    <li> After clicking "Send" wait until you get redirected to a new page.</li> <br>
    
</ul>

</span>
</div>



</body>
</html>