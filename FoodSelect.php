<?php
  session_start();
  include 'sql_connect.php';
       
    if(isset($_POST['submit'])) 
    {//assign checkbox to variable
      $food=$_POST['food']; 
      $seat_id = $_POST['seat_id'];
      $_SESSION['food'] = $food;
      $price = 0.00;
      $quantity = $_SESSION['seat_count'];  
    
    
      if ($food == "SETA")
      {
        $price = 8.00 + 7.00 * $quantity;
      }
      else if($food == "SETB")
      {
        $price = 12.00 + 7.00 * $quantity;
      }
      else if($food == "SETC")
      {
        $price = 16.00 + 7.00 * $quantity;
      }
      else if ($food == "SETA1")
      {
        $price = 12.00 + 7.00 * $quantity;
      }
      else if ($food = "SETB1")
      {
        $price = 14.00 + 7.00 * $quantity;
      }
      else
      {
        $price = 18.00 + 7.00 * $quantity;
      }
      echo $price;


      $_SESSION['price'] = $price;
      $_SESSION['food']= $food;
      header("Location: details.php");

    }
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

  input[type=checkbox] {
    display:none;
  }

  /* HIDE RADIO */
  [type=radio] { 
    position: absolute;
    opacity: 0;
    width: 0;
    height: 0;
  }

  /* IMAGE STYLES */
  [type=radio] + img {
    cursor: pointer;
  }

  /* CHECKED STYLES */
  [type=radio]:checked + img {
    outline: 2px solid #6a0dad
  }

</style>

<body style="background-color:#161417;color:white;">


  <ul>
  	<li><img src="img/logo.jpg" alt=logo style="margin-left: 80px;margin-top: 10px"></li>
    <li><a class="active" href="usermovies.php" style="margin-top: 30px;">Movies</a></li>
    <!--li><a href="showtime.php">Showtime</a></li-->
    <li><a href="location.html" >Cinemas</a></li>
    <li><a href="FoodMenu.php">Food</a></li>
  </ul>


  <form style="margin-top: 50px;margin-left: 1175px;max-width:250px">
    <input type="text" name="search" placeholder="Search..">
  </form>

  <h2 style= "margin-left: : 30px"> FOOD AND BEVERAGES</h2>


  <hr class="new1">
  <br>

  <form method="post">

  <center>
  <table>
    <tr>
      <td>
        <center><h2>POPCORN COMBO</h2></center>
        <label>
          <input type="radio" name="food" value="SETA" checked>
          <img src="food/setA.png" alt="date" style="padding-left:20px;">
        </label>
        <label>
          <input type="radio" name="food" value="SETB" checked>
          <img src="food/setB.png" alt="date"style="padding-left:20px;"> 
        </label>
        <label>
          <input type="radio" name="food" value="SETC" checked>
          <img src="food/setC.png" alt="date"style="padding-left:20px;">
         </label>
 </center>
      </td>
  	</tr>
  </table>
  <hr>
  <center>
  <table>
    <tr>
      <td>
        <center><h2>HOTDOG COMBO</h2></center>
        <label>
          <input type="radio" name="food" value="SETA1" checked>
          <img src="food/setA1.png" alt="date" style="padding-left:20px;">
        </label>
        <label>
          <input type="radio" name="food" value="SETB1" checked>
          <img src="food/setB1.png" alt="date"style="padding-left:20px;"> 
        </label>
        <label>
          <input type="radio" name="food" value="SETC1" checked>
          <img src="food/setC1.png" alt="date"style="padding-left:20px;">
        </label>
 </center>
      </td>
  	</tr>
  </table>

  </br>
  <center><p> <input type="submit" name="submit" class="button" value="OK" style="padding-left: 18px"> </p> </center>

  <hr class="new1">

  <p style="text-align: right;color: white;letter-spacing: 2px;font-size: 11px"> Follow us : </p>
  <p style="text-align: right;color: white;letter-spacing: 2px;font-size: 11px"> Copyright Reserved © 2019 iMad Cinemas Sdn Bhd. All Rights Reserved.</p>

</body>
</html>
