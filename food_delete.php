<?php 
include('dbcon.php');

$delete=mysql_query("delete from food_list where id='".$_GET['id']."'");
if($delete)
{
	header('location:admin.php?page=food');	
}
else
{
	echo mysql_error();
}	
?>
