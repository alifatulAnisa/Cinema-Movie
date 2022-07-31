<?php
	session_start();
	include('sql_connect.php');

	$sql = mysql_query("INSERT INTO payment (total, cust_name, movie_name, food_id, location, showtime, datee) VALUES('{$_SESSION['price']}', '{$_SESSION['cust_name']}', '{$_SESSION['movie_name']}', '{$_SESSION['food']}' , '{$_SESSION['location']}', '{$_SESSION['showtime']}' , '{$_SESSION['datee']}')");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Confirm Receipt</title>
	<link rel="stylesheet" type="text/css" href="receipt.css">

<style type="text/css">
	html{
		height: 100%;
	}

	body{
		font-family: "Arial", Helvetica, sans-serif;
		position: relative;
	}

	#container{
		text-align: center;
		margin-right: 60%;
		position: relative;
		height: 100%;
		margin-top: 80px;
	}

	#movies_booked, #form{
		display: inline-block;
		width: 40%;
		height: 100%;
		margin: 0 auto;
		vertical-align:text-top;
	}
				
	.rec_main {
		background-color:#fff;
		font-size: 13px;
		font-family: Arial, Helvetica, sans-serif ;
		color: #000;
		text-decoration: none;
	}
				
	.rec_td_right {
		vertical-align: middle;
		text-align: right;
	}
				
	.rec_td_center {
		vertical-align: middle;
		text-align: center;
	}
				
	.rec_td_left {
		vertical-align: middle;
		text-align: left;
	}
</style>

</head>
<body >
<div class="checkout-panel">
 	<div class="panel-body">
 
	<center>
		<div id="container">
			<div id="form">
    			<table class="rec_main" border="0" cellspacing="0" witdh="600">
					<tr>
						<td class="rec_td_center">
							<table class="rec_main" border="0" cellpadding="0" cellspacing="0" width="600">
								<tr>
									<td class="rec_td_center">
										<br>
										<span style="font-size: 24px;">
											<strong>CONFIRMATION RECEIPT</strong>
										</span>
									</td>
								</tr>
								<tr>
									<td class="rec_td_center">
										<br>
										<span style="font-size: 16px; color: #080;">
											<strong>Your transaction has been approved</strong>
										</span>
									</td>
								</tr>
								<tr>
									<td>
										<br>
										<table class="rec-main" border="0" cellpadding="0" cellspacing="0" width="600">
											<tr>
												<td class="rec_td_center" width="270">
													<img src="img/qrmeme.jpeg" width="135">
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td>
										<br>
										<table class="rec_main" border="0" cellpadding="0" cellspacing="0" width="600">
											<tr>
												<td class="rec_td_right" width="270">
													<strong>MOVIE DETAILS</strong> 
												</td>
												<td width="20">&nbsp;</td>
												<td class="rec_td_left" width="270">&nbsp;</td>
											</tr>
											<tr>
												<td class="rec_td_right" width="270">
													<strong>Movie :</strong>
												</td>
												<td width="20">&nbsp;</td>
												<td class="rec_td_left" width="270"><?php 	echo $movie_name = $_SESSION['movie_name']; ?></td>
											</tr>
											<tr>
												<td class="rec_td_right" width="270">
													<strong>Date:</strong>
												</td>
												<td width="20">&nbsp;</td>
												<td class="rec_td_left" width="270"><?php 	echo $datee = $_SESSION['datee']; ?></td>
											</tr>											
											<tr>
												<td class="rec_td_right" width="270">
													<strong>Total Seat :</strong>
												</td>
												<td width="20">&nbsp;</td>
												<td class="rec_td_left" width="270"><?php 	echo $seat_count = $_SESSION['seat_count']; ?></td>
											</tr>
											<tr>
												<td class="rec_td_right" width="270">
													<strong>Seat :</strong>
												</td>
												<td width="20">&nbsp;</td>
												<td class="rec_td_left" width="270"><?php 

									          	foreach($_SESSION['seat_id'] as $key=>$value)//seat apa yg user pilih
									          	{
									           	// and print out the seat user choose
									           	echo $value.' ';
									          	} ?></td>
											</tr>
											<tr>
												<td class="rec_td_right" width="270">
													<strong>Food set :</strong>
												</td>
												<td width="20">&nbsp;</td>
												<td class="rec_td_left" width="270"><?php 	echo $food = $_SESSION['food']; ?></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td>
									<br>
									<table class="rec_main" border="0" cellpadding="0" cellspacing="0" width="600">
										<tr>
											<td class="rec_td_right" width="270">
												<strong>PAYMENT DETAILS</strong>
											</td>
											<td width="20">&nbsp;</td>
											<td class="rec_td_left" width="270">&nbsp;</td>
										</tr>
										<tr>
											<td class="rec_td_right" width="270">
												<strong>Total Purchased :</strong>
											</td>
											<td width="20">&nbsp;</td>
											<td class="rec_td_left" width="270">RM<?php echo $price = $_SESSION['price']; ?></td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td><button type="submit" class="btn next-btn" style="margin-right: 50%;"><a href="usermovies.php" style="color: #fff; text-decoration: none;">Back to Home</a></button></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div>  
		</div>
	</center>
</body>
</html>