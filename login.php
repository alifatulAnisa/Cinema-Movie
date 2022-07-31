<?php
	session_start();
	include('connect.php');

	if (isset($_POST['login'])){

		$cust_email=mysql_escape_string($_POST['cust_email']);
        $cust_password=mysql_escape_string($_POST['cust_password']);
   
		$sql= mysql_query("SELECT * FROM customer WHERE cust_email = '$cust_email' AND cust_password = '$cust_password'");

		if(mysql_num_rows($sql) > 0)
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
 			window.alert('Login Succesfully!')
 			window.location.href='usermovies.php'
            </SCRIPT>");
            $_SESSION['cust_email']=$cust_email;
            exit();
        }
        else{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Wrong username password combination.Please re-enter.')
			window.location.href='login.php'
			</SCRIPT>");
			exit();
        }
    }
	else{
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration Form</title>
	<link rel="stylesheet" type="text/css" href="styleL.css">

	<style>
		p a {
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
			<form method="post" action="login.php" class="login">
				Email<input type="text" name="cust_email" placeholder="Email">
				Password<input type="password" name="cust_password" placeholder="Password">

				<div class="btnRegister">
					<input type="submit" name="login" value="Login">
				</div>

				<div class="reg">
					<p>Not Registered? <a href="register.php">Register</a></p>
				</div>		
			</form>
		</div>
	</div>
</body>
</html>