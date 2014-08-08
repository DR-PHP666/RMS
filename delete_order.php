<?php 
include('dbcon.php'); 
$order=$_POST['order_no'];
$id=$_POST['id'];
$query=mysql_query("delete from order_det where id='$id' AND order_no='$order'");
if($query)
{

}
else
{
	echo mysql_error();	
}
?>
