<?php require_once "satellite.php"; ?>
<?php 
$username = $_SESSION['username'];
if($username == false){
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create a New Password</title>
    <link rel="stylesheet" type="text/css">
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
.loginbox h2{
    margin: 0;
    padding : 0 0 20px;
    text-align: center;
font-size: 22px;
}
</style>
</head>
<body>
 <div class="loginbox">
                <form action="newpassword.php" method="POST" autocomplete="off">
                    <h2>New Password</h2>
                         <input  type="password" name="password" placeholder="Create new password" required>
                 
             
                        <input  type="password" name="cpassword" placeholder="Confirm your password" required>
                        <br>
                        <br>
                        <br>
                        <br> <br> <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <input type="submit" class="button" name="change-password" value="Change">
                    </div>
</form>
</body>
</html>