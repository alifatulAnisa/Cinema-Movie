<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("cinema", $conn);
//search code
//error_reporting(0);
if($_REQUEST['search']){
$search = $_POST['search'];

if(empty($search)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM search WHERE movie_name LIKE '%$search%'";
	$result = mysql_query($sele);
	
	if($make = mysql_num_rows($result) > 0){
		while($row = mysql_fetch_assoc($result)){
		echo '<h4> Id						: '.$row['id'];
		echo '<br> name						: '.$row['name'];
		echo '</h4>';
		
	}
}else{
echo'<h2> Search Result</h2>';

print ($make);
}
mysql_free_result($result);
mysql_close($conn);
}
}

?>
