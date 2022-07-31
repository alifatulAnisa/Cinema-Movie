<?php 
	session_start();

	$sql = mysql_query("INSERT INTO payment (total, cust_name, movie_name, food_id, location_id, showtime, datee) VALUES('{$_SESSION['price']}', '{$_SESSION['cust_name']}', '{$_SESSION['movie_name']}', '{$_SESSION['food']}' , '{$_SESSION['location']}', '{$_SESSION['showtime']}' , '{$_SESSION['datee']}')");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Booking Details</title>
	<link rel="stylesheet" type="text/css" href="details.css">

	<style type="text/css">
	
		body{
			font-family: "Verdana", Helvetica, sans-serif;
			position: relative;
		}

		#container{
			text-align: center;
			position: relative;
		}

		#movies_booked, #form{
			display: inline-block;
			width: 500px;
			height: 100%;
			margin: 0 auto;
			vertical-align:text-top;
		}

		fieldset, #movies_booked{
			border:1px solid #AED0EA;
			border-radius:8px;
			box-shadow:0 0 10px #9B59B6;
		}

		legend, #disount_title{
			color: #000;
			font-size: 120%;
			text-align: center;
			background-color: white;
		}

		p{
			overflow: hidden;
		}

		label{
			width: 50%;
			text-align: left;
			float: left;
			clear: both;
			color: #000;
		}

		p input, p select{
			width: 40%;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			float: left;
			margin-left: 5%;
			margin-right: 5%;
			color: #2779AA;
		}

		#theaters, #total_price, #movies_list, li, #perTicketPrice, #note{
			color: #2779AA;
		}

		p span, li{
			text-align: left;
		}

		#submit_wrapper{
			text-align: center;
		}

		#submit{
			font-size: 13px;
		}

		#discount, #perTicketPrice{
			text-align: left;
		}

		#dateNote{
			font-size: 9px;
		}
        
	</style>
</head>

<body style="color:white">
<div class="checkout-panel">
  	<div class="panel-body">
	<br><br>
	<h1 style="color: #9324ac;">CONFIRM BOOKING</h1>

		<div class="progress-bar">
	    	<div class="step active"><a href="#"></a></div>
	      	<div class="step active"><a href="#"></a></div>
	      	<div class="step"><a href="#"></a></div>
	      	<div class="step"><a href="#"></a></div>
    	</div>

		<div id="container">
		  <div id="form">
		    <form id="book_tickets">
		      <fieldset style="font-size: 20px">
		        <legend></legend>

<?php 
include 'sql_connect.php';
?>

 	<h2>DETAILS CONFIRMATION</h2>
        <p><b>MOVIE NAME: </b><?php echo $movie_name = $_SESSION['movie_name']; ?></p>

        <p><b>LOCATION: </b><?php echo $location = $_SESSION['location']; ?>
        </p>

         <p><b>DATE: </b><?php echo $datee = $_SESSION['datee']; ?></p>

         <p><b>SHOWTIME: </b><?php echo $showtime = $_SESSION['showtime']; ?>
        </p>

        <p><b>EMAIL: </b><?php echo $cust_email = $_SESSION['cust_email']; ?>
        </p>

        <p><b>SEAT: </b>
        
        <?php 
        	foreach($_SESSION['seat_id'] as $key=>$value)//seat apa yg user pilih
          	{
           		// and print out the seat user choose
           		echo $value.' ';
          	} 
        ?>

        </p>

        <p><b>FOOD SET: </b><?php echo $food = $_SESSION['food']; ?>
        </p>

        <p><b>TOTAL PRICE: RM</b><?php echo $price = $_SESSION['price']; ?>
        </p>

		      <a style="background-color: #9324ac;
                  color: white;
                  padding: 14px 25px;
                  text-align: center;
                  text-decoration: none;
                  display: inline-block;
                  border-radius: 23px;" href="confirm.php">BOOK</a>
      				</fieldset>
    			</form>
			</div>	    	
		</div>
	</div>
</div>
</body>
</html>