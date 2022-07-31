<?php 
include 'sql_connect.php';
       //assign checkbox to variable
	   $food=$_POST['food']; 
	  
          $price = 0.00;   
	  
	  
       if ($food == "setA")
	   {
		   $price = 8.00;
	   }
	   else if($food == "setB")
	   {
		   $price = 12.00;
	   }
	   else if($food == "setC")
	   {
		   $price = 16.00;
	   }
	   else if ($food == "setA1")
	   {
		   $price = 12.00;
	   }
	   else if ($food = "setB1")
	   {
		   $price = 14.00;
	   }
	   else
	   {
		   $price = 18.00;
	   }
	 
	   
	   echo $price;

	   header ("Location: details.php");
?>

