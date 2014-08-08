<?php 
include('dbcon.php');
$code=$_POST['code'];
$item=$_POST['item'];
$catagory=$_POST['catagory'];
$type=$_POST['type'];
$price=$_POST['price'];
$vat=$_POST['vat'];
$insert=mysql_query("insert into food_list (id, food, catagory, food_type, price,vat) values('$code','$item','$catagory', '$type', '$price', '$vat')");
if($insert)
{
	header('location:admin.php?page=food');	
}
else
{
	echo mysql_error();	
}


?>
