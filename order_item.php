<?php 
include('dbcon_s.php'); 
$order=$_POST['order'];
$type=$_POST['type'];
$act=$_POST['act'];
if($act=='all')
{
	$query=mysql_query("select * from order_det where order_no='$order' and food_type='$type' group by food");
}
else 
{
	$query=mysql_query("select * from order_det where order_no='$order' and food_type='$type' and print='no' group by food");
}
$str="";
while($row=mysql_fetch_array($query))
{
	$str.=$row['food'].'#';
}
echo $str;
