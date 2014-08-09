<?php 
include('dbcon.php');
$delete=mysql_query("delete from food_list where id='".$_GET['id']."'");
$delete1=mysql_query("delete from package_det where package_id='".$_GET['id']."'");
if($delete && $delete1)
{
	header('location:admin.php?page=package');	
}
else
{
	echo mysql_error();
}	
?>
