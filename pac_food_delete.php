<?php 
include('dbcon.php');

$delete=mysql_query("delete from package_det where id='".$_GET['id']."'");
if($delete)
{
	header('location:admin.php?page=pac_food&id='.$_GET['pac_id']);	
}
else
{
	echo mysql_error();
}	
?>
