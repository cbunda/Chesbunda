<?php require_once "satellite.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
.loginbox p{
	margin: 0;
	padding: 0;
	font-weight: bold;
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
.loginbox button{

		border: none;
	outline: none;
	height: 40px;
	background: white;
	color: black;
	font-size: 18px;
	border-radius: 10px;
}
</style>
</head>
	<body>
	<div class="loginbox"> 
				<b><h1> Forgot Password </h1> </b>
			<form action="forgotPassword.php" method="post" autocomplete="off">
						<p> Username </p>	
						<br>
						<input type="text" name="username"  placeholder="Enter Your Username "required>
			<br><br><br><br><br><br><br>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<button type="submit"  name="next"  > Next</button>

</body>
</form>
</html>