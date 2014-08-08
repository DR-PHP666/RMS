<?php
include('dbcon_s.php');

$modify=$_POST['modify'];
$find=mysql_query("select * from modify where id='$modify'");
$count=mysql_num_rows($find);
if($count>0)
{
	$row=mysql_fetch_array($find);
	$modify=$row['modify'];	
}
$query=mysql_query("update order_det set modify='$modify' where id='".$_POST['id']."'");
if($query)
{
}
else 
{
    echo mysql_error();
}

?>
