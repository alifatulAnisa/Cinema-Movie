<?php
  session_start();
  include('sql_connect.php');
?> 
<html>

<head>
 <!--search-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--search-->
   <link rel="stylesheet" href="css/style.css">
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

  <?php
    echo $cust_email = $_SESSION ["cust_email"];
    $query = mysql_query ("select * from customer where cust_email= '$cust_email'");
    $numrows = mysql_num_rows($query);

    if ($numrows!==0)
    {
      while($row = mysql_fetch_assoc($query))
      {
        $cust_name = $row ['cust_name'];
        $_SESSION['cust_name']=$cust_name;
        }
    }
  ?>

  <ul>
  	<li><a href="movies.php"><img src="img/logo.jpg" alt=logo style="margin-left: 80px;margin-top: 10px"></a></li>
    <li><a class="active" href="usermovies.php" style="margin-top: 30px;">Movies</a></li>
    <!--li><a href="showtime.php">Showtime</a></li-->
    <li><a href="location.html" >Cinemas</a></li>
    <li><a href="FoodMenu.php">Food</a></li>
    <li><a href="profile.php" style="margin-left: 400px">Welcome, <?php echo $cust_name?>.</a></li>
    <li> <a href="logout.php">Logout</a></li>
  </ul>

  <form action = "search.php" style="margin-top: 50px;margin-left: 1080px;max-width:250px">
    <input type="text" name="keyword" placeholder="Search..">
  </form>

  <h2 style= "margin-left: : 30px"> NOW SHOWING MOVIE</h2>
  <hr class="new1">

  <?php
    $sql="select * from movie";
    $query=mysql_query($sql);

      if(mysql_num_rows($query)>0){ 
        $i=1; 
    		while($row=mysql_fetch_object($query)){ 	       
  ?>    

  <img src= <?php echo "movie/". $row->movie_img; ?> alt="Image" style=" width: 180px;height: 250px; margin-top: 100px;margin-left: 110px">
  <a href="info.php?id=<?php echo $row->movie_id; ?>" class="button" style="margin-left: 30px;">INFO</a>
  
  <?php  } } ?>     

  <center><p style="letter-spacing: 8px; color: #9324ac;font-size: 40px"> BOOK NOW </p></center>

  <div id="main">
    <table class="timecard">
	
  <?php
      $sql="select * from movie";
      $result = mysql_query($sql) or die('Query failed. ' . mysql_error());
      $tmpCount = 1;

        if(mysql_num_rows($result) != 0) {
        while($row = mysql_fetch_assoc($result)) {
  ?>
    	<tbody>   		
    		<tr class="even">
    		  <th><?php echo $row['movie_id'] ?></th>
    			<td><?php echo $row['movie_name'] ?></td>
    			<td><a href= "booking.php?id=<?php echo $row['movie_name'];?>" class="button" style="margin-top: 5px;">BOOK</a></td>
    		</tr>
		
	<?php $tmpCount++; }
    }else{            
    }
  ?>	

      </tbody>
    </table>
  </div>

  <hr class="new1">

  <p style="text-align: right;color: white;letter-spacing: 2px;font-size: 11px"> Follow us : </p>
  <p style="text-align: right;color: white;letter-spacing: 2px;font-size: 11px"> Copyright Reserved © 2019 iMad Cinemas Sdn Bhd. All Rights Reserved.</p>
</body>
</html>
