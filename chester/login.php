
<?php require_once "satellite.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title> User Login  </title>
<link rel="stylesheet" type="text/css" >
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
.avatar{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: calc(50% - 50px);
}

h1{
	margin: 0;
	padding : 0 0 20px;
	text-align: center;
font-size: 22px;
}
.loginbox p{
	margin: 0;
	padding: 0;
	font-weight: bold;
}
.loginbox input{
	cursor: pointer;
	background: #ffc187;
	color: #000;
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
.loginbox button
{
border: none;
    outline: none;
    height: 40px;
    background: white;
    color: black;
    font-size: 18px;
    border-radius: 10px
}

.loginbox a
{
	cursor: pointer;

	
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color: white;
}

</style>
</head>

<body>

	<div class="loginbox"> 
		<img src="chesteravatar.png" class="avatar">

		
				<h1> Login Here </h1>
				<form action="login.php" method="post">
			
						<p> Username </p>
						<input type="text" name="username"  placeholder=" Username "required>
				<br>
				<br>
				<br>
						<p> Password </p>
						<input type="password" name="password"  placeholder="Password"required>
			<br><br>
			<br>

					<button type="submit" id="login"  name="login"  > Login </button>
<br><br>

</form>
					   <a href="forgotPassword.php">Forgot password?</a>
					   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					    <a href="registrationpage.php"> Register </a>

			



</div>
						

	


	


</body>


</html>
