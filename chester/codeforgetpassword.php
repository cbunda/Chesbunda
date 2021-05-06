
<html>
<head>
	<title> Code Verification </title>
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
h2{
	margin: 0;
	padding : 0 0 20px;
	text-align: center;
font-size: 22px;
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
.loginbox th{
  border: none;
    border-bottom: 1px solid#fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox tbody{
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
    font-size: 20px;
    line-height: 20px;
    color: white;
   }

	</style>
</head>
<body>
<div class="loginbox">
		<h2>  Code List </h2>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Code List </th>
					<th> Status </th>
				</tr>
			</thead>
			<tbody>

		<?php		
	$con = mysqli_connect('localhost','root','','userregistration');


$sql = "SELECT id, code, status FROM usertable";

$result = $con->query($sql);
				if ($result->num_rows > 0){
					while($row = $result-> fetch_assoc()) {
							echo "<tr row_id='" . $row['id'] . "'><td>" . $row['code'] . "</td><td>" . $row['status'] . "</td>"; }
						}
	?>
</tbody>
</table>
<br>
<br>



<a href="fpassword.php">  Back to code verification </a>

							</tbody>
		
	</div>
</body>
</html>