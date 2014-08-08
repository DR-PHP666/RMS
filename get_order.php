<?php 
include('dbcon.php'); 
$table=$_POST['table'];
$query=mysql_query("select * from table_info where table_name='$table'");

$row=mysql_fetch_array($query);
echo $row['order_no'];

?>
