<?php
  session_start();
  include('sql_connect.php');

  $sql="select * from movie where movie_id='{$_GET['id']}' ";
  $query=mysql_query($sql);
  $row=mysql_fetch_object($query);
  $movie_name=$row->movie_name;
  $movie_desc=$row->movie_desc;
  $movie_vid=$row->movie_vid;
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

  <h2 style= "margin-left: : 30px"> MOVIE INFO : <?php echo $movie_name; ?></h2>
  <hr class="new1">
  <br>
  <center>

  <table style="width:50%" border="0">

    <tr>
      <td rowspan="6"><img src= <?php echo "movie/". $row->movie_img; ?> alt="Image" style=" width: 200px;height: 250px;margin-right: 50px"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <th colspan="2" align="left">SYNOPSIS</th>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2"><?php echo "". $row->movie_desc; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <th colspan="2" align="left">DETAILS</th>
    </tr>
    <tr>
      <td>&nbsp;</td>
    	<td>&nbsp;</td>
    	<td>Rating</td>
    	<td>P13</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    	<td>&nbsp;</td>
    	<td>Subtitle</td>
    	<td>English</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <th colspan="2" align="left">TRAILER</th>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    	<td>&nbsp;</td>
    	<td colspan="3"><video width="500" height="240" controls>
      <source src= <?php echo "movie/". $row->movie_vid; ?> type="video/mp4"></video></td>
    </tr>

  </table></center>

  <br>
  <hr class="new1">

  <p style="text-align: right;color: white;letter-spacing: 2px;font-size: 11px"> Follow us : </p>
  <p style="text-align: right;color: white;letter-spacing: 2px;font-size: 11px"> Copyright Reserved © 2019 iMad Cinemas Sdn Bhd. All Rights Reserved.</p>
</body>
</html>