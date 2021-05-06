<?php require_once "satellite.php"; ?>
<?php 
$username = $_SESSION['username'];
if($username == false){
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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

h1{
    margin: 0;
    padding : 0 0 20px;
    text-align: center;
font-size: 22px;
font-family: sans-serif;
color: white;
}
.loginbox{
    width: 320px;
    height: 400px;
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
.loginbox a
{
    text-decoration: none;
    font-size: 20px;
    line-height: 20px;
    color: white;
}
    </style>
</head>
<body>
  <div class="loginbox"> 
         
                <form action="fpassword.php" method="POST" autocomplete="off">
                    <h1>Code Verification</h1>
                 
                
                        <input class="form-control" type="number" name="otp" placeholder="Enter verification code" required>
                
                <br><br>

                        <input  type="submit" class="button" name="check-otp" value="Submit">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        

                        <a href="codeforgetpassword.php"> Code Checking </a>
                  
                
            
</div>
                </form>
   
    
</body>
</html>