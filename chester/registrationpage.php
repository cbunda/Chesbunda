<?php

session_start();
$errors = array();
	$con = mysqli_connect('localhost','root','','userregistration');
	

if(isset($_POST['register'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
    $cpassword = $_POST['cpassword'];
    if($password !== $cpassword){
         echo "<script> alert('Your Password not Match') </script>";
        echo "<script> location.replace('login.php')</script>";
    } 
    
    $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
    echo "<script> alert('mail that you have entered is already exist!') </script>"; 
     echo "<script> location.replace('login.php')</script>";
    }
    else {
	$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);
	$number    = preg_match('@[0-9]@', $password);
	$specialChars = preg_match('@[^\w]@', $password);
}
if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8){
echo '<script> alert("password should be need at least 8 characters, and should include at least one upper case letter, one number, one special character.") </script>';
echo "<script> location.replace('login.php')</script>";

} else 
	if (count($errors) == 0) {
        $code = rand(999999, 111111);
        $status = "notverified";

		$reg = "INSERT INTO usertable (username , password , email,  status) VALUES ('$username' , '$password' , '$email' , '$status')";

			mysqli_query($con, $reg);
		
			echo "<script> alert('Registration Succesful') </script>";
	echo "<script> location.replace('login.php')</script>";

		
	}
	}		



?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
	height: 580px;
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
}
.loginbox p{
	margin: 0;
	padding: 0;
	font-weight: bold;
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
.loginbox a
{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color: white;
}
.loginbox button
{
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
				<h1> <b>Register Here </b></h1>
				<form action="registrationpage.php" method="post">
				<br>
			
						<p> Username </p>
						<input type="text" name="username" placeholder="Username " required>
									
						<p> Password </p>
						<input type="password" name="password"   placeholder="Password "required>
				

			
						<p> Confirm Password </p>
						<input type="password" name="cpassword"  placeholder="Confirm Password "required>
				

						<p> Email </p>
						<input type="text" name="email"  placeholder="Enter Your Email "required>
				
						<br>
						<br><br>

					<button type="submit" class="btn btn-primary" name="register"> Register </button>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<a href="login.php"> Back to Login </a>
				</div>

</form>
	</div>
</body>
</html>