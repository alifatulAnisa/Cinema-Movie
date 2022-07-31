<?php
  session_start();
 
  if(isset($_POST['submit'])) 
  {
    if ($_POST['seat_id'] == 0)
    {
      echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('please choose seat to proceed')</SCRIPT>");
      header('seat.php');
    }

    else
    {

      $seat_id= $_POST['seat_id'];
      $seat_count = count($seat_id);

      $_SESSION['seat_id']=$seat_id;
      $_SESSION['seat_count']=$seat_count;
      echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.location.href='FoodSelect.php'
      </SCRIPT>");
    }   
  }
?>
<html>

<head>
 <!--search-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--search-->
   <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="seat.css"> 
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

</style>

<body style="background-color:#161417;color:white;">

  <ul>
  	<li><a href="usermovies.php"><img src="img/logo.jpg" alt=logo style="margin-left: 80px;margin-top: 10px"></a></li>
    <li><a class="active" href="usermovies.php" style="margin-top: 30px;">Movies</a></li>
    <!--li><a href="showtime.php">Showtime</a></li-->
    <li><a href="location.html" >Cinemas</a></li>
    <li><a href="FoodMenu.php">Food</a></li>
  </ul>

  </br>
  <center>
    <img src="img/screen.jpg" alt="screen"> 
  </center> 
  </br></br>


  <center>
    <form method="POST">
      <img src="img/A.png" alt="seat"> 
      <input type="checkbox" name='seat_id[]' value="A1" id="thing1"/><label for="thing1"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="A2" id="thing2"/><label for="thing2"><img src="img/seat.png" alt="seat"> </label>&emsp; 
      <input type="checkbox" name='seat_id[]' value="A3" id="thing3"/><label for="thing3"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="A4" id="thing4"/><label for="thing4"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="A5" id="thing5"/><label for="thing5"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="A6" id="thing6"/><label for="thing6"><img src="img/seat.png" alt="seat"> </label>&emsp;
      <input type="checkbox" name='seat_id[]' value="A7" id="thing7"/><label for="thing7"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="A8" id="thing8"/><label for="thing8"><img src="img/seat.png" alt="seat"> </label>
    </br>

      <img src="img/B.png" alt="seat"> 
      <input type="checkbox" name='seat_id[]' value="B9"  id="thing9"/><label for="thing9"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="B10" id="thing10"/><label for="thing10"><img src="img/seat.png" alt="seat"> </label>&emsp; 
      <input type="checkbox" name='seat_id[]' value="B11" id="thing11"/><label for="thing11"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="B12" id="thing12"/><label for="thing12"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="B13" id="thing13"/><label for="thing13"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="B14" id="thing14"/><label for="thing14"><img src="img/seat.png" alt="seat"> </label>&emsp;
      <input type="checkbox" name='seat_id[]' value="B15" id="thing15"/><label for="thing15"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="B16" id="thing16"/><label for="thing16"><img src="img/seat.png" alt="seat"> </label>
    </br>

      <img src="img/C.png" alt="seat"> 
      <input type="checkbox" name='seat_id[]' value="C16" id="thing17"/><label for="thing17"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="C18" id="thing18"/><label for="thing18"><img src="img/seat.png" alt="seat"> </label>&emsp; 
      <input type="checkbox" name='seat_id[]' value="C19" id="thing19"/><label for="thing19"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="C20" id="thing20"/><label for="thing20"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="C21" id="thing21"/><label for="thing21"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="C22" id="thing22"/><label for="thing22"><img src="img/seat.png" alt="seat"> </label>&emsp;
      <input type="checkbox" name='seat_id[]' value="C23" id="thing23"/><label for="thing23"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="C24" id="thing24"/><label for="thing24"><img src="img/seat.png" alt="seat"> </label>
    </br>

     </br>
      <img src="img/D.png" alt="seat"> 
      <input type="checkbox" name='seat_id[]' value="D25" id="thing25"/><label for="thing25"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="D26" id="thing26"/><label for="thing26"><img src="img/seat.png" alt="seat"> </label>&emsp; 
      <input type="checkbox" name='seat_id[]' value="D27" id="thing27"/><label for="thing27"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="D28" id="thing28"/><label for="thing28"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="D29" id="thing29"/><label for="thing29"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="D30" id="thing30"/><label for="thing30"><img src="img/seat.png" alt="seat"> </label>&emsp;
      <input type="checkbox" name='seat_id[]' value="D31" id="thing31"/><label for="thing31"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="D32" id="thing32"/><label for="thing32"><img src="img/seat.png" alt="seat"> </label>
    </br>

      <img src="img/E.png" alt="seat"> 
      
      <input type="checkbox" name='seat_id[]' value="E33" id="thing33"/><label for="thing33"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="E34" id="thing34"/><label for="thing34"><img src="img/seat.png" alt="seat"> </label>&emsp; 
      <input type="checkbox" name='seat_id[]' value="E35" id="thing35"/><label for="thing35"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="E36" id="thing36"/><label for="thing36"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="E37" id="thing37"/><label for="thing37"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="E38" id="thing38"/><label for="thing38"><img src="img/seat.png" alt="seat"> </label>&emsp;
      <input type="checkbox" name='seat_id[]' value="E39" id="thing39"/><label for="thing39"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="E40" id="thing40"/><label for="thing40"><img src="img/seat.png" alt="seat"> </label>
    </br>

    <img src="img/F.png" alt="seat"> 
      
      <input type="checkbox" name='seat_id[]' value="F41" id="thing41"/><label for="thing41"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="F42" id="thing42"/><label for="thing42"><img src="img/seat.png" alt="seat"> </label>&emsp; 
      <input type="checkbox" name='seat_id[]' value="F43" id="thing43"/><label for="thing43"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="F44" id="thing44"/><label for="thing44"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="F45" id="thing45"/><label for="thing45"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="F46" id="thing46"/><label for="thing46"><img src="img/seat.png" alt="seat"> </label>&emsp;
      <input type="checkbox" name='seat_id[]' value="F47" id="thing47"/><label for="thing47"><img src="img/seat.png" alt="seat"> </label>
      <input type="checkbox" name='seat_id[]' value="F48" id="thing48"/><label for="thing48"><img src="img/seat.png" alt="seat"> </label>
    </br>
    </br>

    <input input type="submit" name="submit" class="button" value="SUBMIT" style="padding-left: 18px"></center>     
    </form>
  </center>


  <hr class="new1">

  <p style="text-align: right;color: white;letter-spacing: 2px;font-size: 11px"> Follow us : </p>
  <p style="text-align: right;color: white;letter-spacing: 2px;font-size: 11px"> Copyright Reserved © 2019 iMad Cinemas Sdn Bhd. All Rights Reserved.</p>
</body>
</html>