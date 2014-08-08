<?php 
include('dbcon.php'); 
$waiter=$_POST['waiter'];
$terminal=$_SESSION['terminal'];
$account=$_SESSION['user'];
$find_waiter=mysql_query("select * from user where id='".$_POST['waiter']."' AND permission='waiter'");
$count=mysql_num_rows($find_waiter);
if($count>0)
{
	$row_w=mysql_fetch_array($find_waiter);
	$waiter=$row_w['user'];	
}

$query_str="insert into order_list (table_name, date, time, person, waiter, account, terminal) values('".$_POST['table']."', '".date('Y:m:d',$time_now)."','".date('H:i:s',$time_now)."', '".$_POST['person']."', '$waiter','$account','$terminal')";
$query=mysql_query($query_str);

if($query)
{
	$query_order=mysql_query("select * from order_list where table_name='".$_POST['table']."' order by order_no desc limit 1");
	$row=mysql_fetch_array($query_order);
	$order_no=$row['order_no'];
	
	$update=mysql_query("update table_info set waiter='$waiter', status='ordered', person='".$_POST['person']."', order_no='".$order_no."', o_time='".time()."' where table_name='".$_POST['table']."'");
	if($query)
	{
		
	}
	else
	{
		echo mysql_error();	
	}
}
?>
