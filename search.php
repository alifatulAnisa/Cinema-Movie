<?php
session_start();
?>
<?php 
include('sql_connect.php');
?> 
<html>

<head>
 <!--search-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--search-->
   <link rel="stylesheet" href="css/style.css"
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




</style>

<body style="background-color:#161417;color:white;">

<?php
$cust_email = $_SESSION ["cust_email"];
$query = mysql_query ("select * from customer where cust_email= '$cust_email'");
$numrows = mysql_num_rows($query);
if ($numrows!==0)
{
  while($row = mysql_fetch_assoc($query))
  {
    $cust_name = $row ['cust_name'];
    }

}
?>
<ul>
	<li><img src="img/logo.jpg" alt=logo style="margin-left: 80px;margin-top: 10px"></li>
  <li><a class="active" href="usermovies.php" style="margin-top: 30px;">Movies</a></li>
  <li><a href="showtime.php">Showtime</a></li>
  <li><a href="location.html" >Cinemas</a></li>
  <li><a href="FoodMenu.php">Food</a></li>
  <li><a href="login.php" style="margin-left: 400px">welcome, <?php echo $cust_name?>.</a></li>
  <li> <a href="logout.php">Logout</a></li>
</ul>

<form style="margin-top: 30px;margin-left: 1080px;max-width:250px">
  <input type="text" name="keyword" placeholder="Search..">
</form>



<?php 
              $displaymovie = "";
              if(!empty($_GET['keyword']))
              { 
  
        $moviename = $_GET['keyword'];
        $sql = mysql_query("select * from movie where movie_name like '$moviename%'") or die(mysql_error());

        if(mysql_num_rows($sql) >= 1)
        {
          while($getRowSearchMovie = mysql_fetch_array($sql))
          {
            ?>



            <h2 style= "margin-left: : 30px"> MOVIE INFO : <?php echo $getRowSearchMovie['movie_name']; ?></h2>
<hr class="new1">
<br>
<center><table style="width:50%" border="0">
  <tr>
    <td rowspan="6"><img src= <?php echo "movie/". $getRowSearchMovie['movie_img']; ?> alt="Image" style=" width: 200px;height: 250px;margin-right: 50px"></td>
    <td>&nbsp;</td>
  <td>&nbsp;</td>
    <th colspan="2" align="left">SYNOPSIS</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
  <td>&nbsp;</td>
    <td colspan="2"><?php echo "". $getRowSearchMovie['movie_desc']; ?> </td>
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
  <td>Language</td>
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
  <source src= <?php echo "movie/". $getRowSearchMovie['movie_vid']; ?>  type="video/mp4"></video></td>
  </tr>
<?php  } } 
} ?>
</table></center>

        

<hr class="new1">

<p style="text-align: right;color: white;letter-spacing: 2px;font-size: 11px"> Follow us : </p>
<p style="text-align: right;color: white;letter-spacing: 2px;font-size: 11px"> Copyright Reserved © 2019 iMad Cinemas Sdn Bhd. All Rights Reserved.</p>
</body>
</html>
