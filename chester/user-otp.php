<?php
require_once "satellite.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Code Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
body{
    margin: 0;
    padding: 0;
    background: url(chester.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.loginbox{
    width: 320px;
    height: 420px;
    background: #000;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 70px 30px;
    background: rgba(0,0,0,0.7);
    border-radius: 10px;
    color: #fff;
}
.loginbox input
{
    border: none;
    border-bottom: 1px solid#fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox .button
{
    border: none;
    outline: none;
    height: 40px;
    background: white;
    color: black;
    font-size: 18px;
    border-radius: 10px;
}

h2
{
    margin: 0;
    padding : 0 0 20px;
    text-align: center;
font-size: 22px;
}
.loginbox .checking
{
   
  
    
    color: white;
    font-size: 18px;
  
}

    </style>
</head>
<body>
  <div class="loginbox">
  
                <form action="user-otp.php" method="POST" autocomplete="off">
                    <h2>Code Verification</h2>
                 
              
                        <input  type="number" name="otp" placeholder="Enter verification code" required>
             <br>
             <br> <br> <br> <br> <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

               
                        <input  type="submit" class="button" name="check" value="Submit">
                 
</form>
<form action="code.php" method="POST">

                   <br>
                   <br>
                        <input  type="submit" class="checking" name="checkcode" value="checkcode">
                </div>
</form>
         
</body>
</html>