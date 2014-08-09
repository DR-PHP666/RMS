<?php 
include('dbcon.php');
$pac_id=$_POST['package'];
$code=$_POST['code'];
$quan=$_POST['quan'];
$query=mysql_query("select * from food_list where id='$code'");
$row=mysql_fetch_array($query);
$item=$row['food'];
$catagory=$row['catagory'];
$food_type=$row['food_type'];

$insert=mysql_query("insert into package_det (package_id, food_code, food, catagory, quantity, food_type) values('$pac_id','$code','$item', '$catagory', '$quan', '$food_type')");
if($insert)
{
	header('location:admin.php?page=pac_food&id='.$pac_id);	
}
else
{
	echo mysql_error();	
}


?>
