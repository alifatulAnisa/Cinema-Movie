<?php
session_start();
?>
<?php 
include('sql_connect.php');



if(isset($_POST['submit'])) 
{ 

  $cust_name = $_POST ['cust_name'];
  $cust_phone = $_POST ['cust_phone'];
  $cust_email = $_POST ['cust_email'];
  $cust_password = $_POST ['cust_password'];

  $sql="UPDATE customer set cust_name='$cust_name', cust_phone= '$cust_phone', cust_email='$cust_email', cust_password='$cust_password' where cust_email= '$cust_email'";
  $sql_check = mysql_query ( $sql) or die ("Query failed");

          if(!$sql_check)
            echo "SQL ERROR";

          else {
            echo "<script> alert('Your profile has been updated!');
            window.location= 'profile.php'</script>";
          }
}

if(isset($_POST['delete'])) 
{ 
  $cust_name = $_POST ['cust_name'];
  $cust_phone = $_POST ['cust_phone'];
  $cust_email = $_POST ['cust_email'];
  $cust_password = $_POST ['cust_password'];

  $sql="delete from customer where cust_email= '$cust_email'";
  $sql_check = mysql_query ( $sql) or die ("Query failed");

          if(!$sql_check)
            echo "SQL ERROR";

          else {
            echo "<script> alert('We are sorry if you have bad experienced with us. Hope to see you again!');
            window.location= 'logout.php'</script>";
          }
}
?> 
<html>

<head>
 <!--search-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--search-->
   <link rel="stylesheet" href="css/style.css">
</head>

<style>

input[type=text], select {
  width: 400px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 20px;
  margin-bottom: 30px;
  margin-top: 10px;
}

input[type=password] {
  width: 400px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 20px;
}

input[type=submit] {
  width: 100%;
  background-color: #9324ac;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 20px;

}

input[type=submit]:hover {
  background-color: #cb88e3;
}

div {
  border-radius: 5px;
  background-color: black;
  padding: 20px;
  width: 800px;
  height:700px;
   font-size: 20px;
   margin-top: 50px;
}


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
    $cust_phone = $row ['cust_phone'];
    $cust_email = $row ['cust_email'];
    $cust_password = $row ['cust_password'];
    }

}
?>
<ul>
	<li><img src="img/logo.jpg" alt=logo style="margin-left: 80px;margin-top: 10px"></li>
  <li><a class="active" href="usermovies.php" style="margin-top: 30px;">Movies</a></li>
  <li><a href="showtime.php">Showtime</a></li>
  <li><a href="location.html" >Cinemas</a></li>
  <li><a href="FoodMenu.php">Food</a></li>
  <li><a href="profile.php" style="margin-left: 400px">welcome, <?php echo $cust_name?>.</a></li>
  <li> <a href="logout.php">Logout</a></li>
</ul>


<h2 style= "margin-left:30px;margin-top: 55px"> PROFILE</h2>
<hr class="new1">




<center>
<div>
  <form method="POST">
  </br>

    <label for="fname">NAME</label> </br>
    <input type="text" id="cust_name" name="cust_name" value="<?php echo $cust_name ?>">
</br>
    <label for="lname">EMAIL</label> </br>
    <input type="text" id="cust_email" name="cust_email" value="<?php echo $cust_email ?>">
</br>
 <label for="fname">PHONE</label> </br>
    <input type="text" id="cust_phone" name="cust_phone" value="<?php echo $cust_phone ?>">
</br>
    <label for="lname">ENTER NEW PASSWORD</label> </br>
    <input type="password" id="cust_password" name="cust_password">
</br>



    
    <input type="submit" style="margin-top: 70px;" name= "submit" value="UPDATE PROFILE">
    <input type="submit"  onclick="return confirm ('Are you sure you want to delete your account?');" name= "delete" value="DELETE ACCOUNT">

  </form>
</div>
</center>

<hr class="new1">

<p style="text-align: right;color: white;letter-spacing: 2px;font-size: 11px"> Follow us : </p>
<p style="text-align: right;color: white;letter-spacing: 2px;font-size: 11px"> Copyright Reserved © 2019 iMad Cinemas Sdn Bhd. All Rights Reserved.</p>
</body>
</html>