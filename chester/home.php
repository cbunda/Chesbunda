<?php require_once "satellite.php"; ?>
<html>
<head>
	<title> Home Page</title>
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
.loginbox{
width: 320px;
	height: 390px;
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
.loginbox h3{
	text-align: center;
	text-decoration: none;
	font-size: 20px;
	line-height: 20px;
	color: white;
}
.loginbox .button
{
border: none;
    outline: none;
    height: 40px;
    background: white;
    color: black;
    font-size: 18px;
    border-radius: 10px
}


</style>
</head>
<body>
	<form action="home.php" method="post">
	
<div class="loginbox">
<h3>Welcome 
<br>
<br>
HomePage!!!! </h3>




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

 <input type="submit" name="logout" class="button" value="logout">
</div>

</form>


</body>
</html>