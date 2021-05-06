<?php require_once "satellite.php"; ?>
<?php
if($_SESSION['info'] == false){
    header('Location: login.php');  
}
?>
<!DOCTYPE html>
<html>
<head>
 
    <title>Login Form</title>
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
    text-align: center;
}
.loginbox div{
 cursor: pointer;
    background: #black;
    color: #000;

}

    </style>
</head>
<body>
    <div class="loginbox">
            <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
                <form action="password-changed.php" method="POST">
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
    
                      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <input  type="submit" name="login-now" value="Login Now">
                    </div>
                </form>
     
</body>
</html>