<?php 
include('dbcon.php');
$package=$_POST['package'];
$food_code=$_POST['food_code'];
$price=$_POST['price'];
$insert=mysql_query("insert into food_list (id, food, catagory, price, food_type) values('$food_code', 'set', '$package', '$price', 'food')");
if($insert)
{
	header('location:admin.php?page=package');	
}
else
{
	echo mysql_error();	
}
?>
