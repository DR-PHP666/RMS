<?php 
include('dbcon_s.php');
$food_code=$_POST['food_code'];

$query=mysql_query("select * from food_list where id='$food_code'");
$count=mysql_num_rows($query);
if($count>0)
{
	$row=mysql_fetch_array($query);
	echo $row['catagory'];	
}
else
{
	echo 0;	
}

?>
