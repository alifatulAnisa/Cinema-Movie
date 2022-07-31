<?php
	session_start();
	include('sql_connect.php');
?> 
<html>

<head>
 <!--search-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--search-->
  <link rel="stylesheet" href="style.css">
</head>

<style>

	/*search*/
	input[type=text] {
		width: 130px;
		height: 40px;
		box-sizing: border-box;
		border: 2px solid #ccc;
		border-radius: 4px;
		font-size: 16px;
		background-color: white;
		background-image: url('searchicon.png');
		background-position: 10px 10px; 
		background-repeat: no-repeat;
		padding: 12px 20px 12px 40px;
		-webkit-transition: width 0.4s ease-in-out;
		transition: width 0.4s ease-in-out;
	}

	input[type=text]:focus {
	  	width: 100%;
	}
	/*search*/

	div {
		border: 5px;
	  	border-style: solid;
	  	border-color: black;
	}
</style>

<body style="background-color:#161417;color:white;">

	<ul>
		<li><a href="usermovies.php"><img src="img/logo.jpg" alt=logo style="margin-left: 80px;margin-top: 10px"></a></li>
		<li><a class="active" href="usermovies.php" style="margin-top: 30px;">Movies</a></li>
		<!--li><a href="showtime.php">Showtime</a></li-->
		<li><a href="location.html" >Cinemas</a></li>
		<li><a href="FoodMenu.php">Food</a></li>
	</ul>

	<form action = "search.php" style="margin-top: 50px;margin-left: 1080px;max-width:250px">
	  <input type="text" name="keyword" placeholder="Search..">
	</form>

	<h2 style= "margin-left: : 30px"> FOOD AND BEVERAGES</h2>
	<hr class="new1">
	<br>

	<center><img src="img/PC.jpg" width = " 1040" height = "285" ></center>

	<table width = "1000" height = "100" align="center" cellspacing="70">
        <tr>		
           	<td>
			   	<div>
					<img src="food/setA.PNG" width = " 400" height = "400" >
				</div>					
	      	</td>			
			<td>
			  	<div>
			
					<img src="food/setB.PNG" width = " 400" height = "400" >
				</div>		
	      	</td>
			<td>
			    <div>			 
					<img src="food/setC.png" width = " 400" height = "400"  >
				</div>
			</td>			
	     </tr>        
    </table>	

 	<center><img src="img/HC.jpg" width = " 1040" height = "285" ></center>

	<table width = "1000" height = "100" align="center" cellspacing="70">
        <tr>		
           	<td>
		   		<div>
					<img src="food/setA1.PNG" width = " 400" height = "400" >
				</div>					
	      	</td>			
			<td>
			  	<div>
					<img src="food/setB1.PNG" width = " 400" height = "400" >
				</div>		
	      	</td>
			<td>
			    <div>			   
					<img src="food/setC1.png" width = " 400" height = "400"  >
				</div>
			</td>	
	    </tr>      
    </table>
	  
	<hr class="new1">

	<p style="text-align: right;color: white;letter-spacing: 2px;font-size: 11px"> Follow us : </p>
	<p style="text-align: right;color: white;letter-spacing: 2px;font-size: 11px"> Copyright Reserved © 2019 iMad Cinemas Sdn Bhd. All Rights Reserved.</p>
</body>
</html>
