<?php
	session_start();
	include('connect.php');

	if (isset($_POST['create'])){
		$cust_name = $_POST['cust_name'];
		$cust_phone = $_POST['cust_phone'];
		$cust_email = $_POST['cust_email'];
		$cust_password = $_POST['cust_password'];
		$cust_rePassword = $_POST['cust_password'];

		if ($cust_password == $cust_rePassword){
			$sql = "INSERT INTO customer(cust_name, cust_phone, cust_email, cust_password) VALUES('$cust_name', '$cust_phone', '$cust_email', '$cust_password')";

			$sql_check = mysqli_query ($conn, $sql) or die ("Query failed");

			if(!$sql_check){
				echo "SQL ERROR";
			}
			else {
				echo "<script> alert('Register Submitted!');
					window.location= 'login.php'</script>";
			}
		}
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration Form</title>
	<link rel="stylesheet" type="text/css" href="styleL.css">

	<style>
		p a{
			text-decoration: none;
		}
	</style>
</head>

<body style="background-color:#161417">
	<ul>
		<a href="movies.php"><img src="img/logo.jpg" alt=logo style="margin-left: 80px;margin-top: 10px"></a>
	</ul>

	<div class="page">
		<div class="form">
			<form method="post" action="register.php" class="register" >
				Name:<input type="text" name="cust_name" placeholder="Name">
				Phone Number:<input type="text" name="cust_phone" placeholder="Phone Number">
				Email:<input type="email" name="cust_email" placeholder="Email">
				Password:<input type="password" name="cust_password" placeholder="Password">
				
				<div class="btnRegister">
					<input type="submit" name="create" value="Register">
				</div>

				<p class="message">Already Registered? <a href="login.php">Login</a></p>
			</form>
		</div>
	</div>
</body>
</html>
