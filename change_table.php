<?php
include('dbcon_s.php');
$from=  explode('*', $_POST['from_table']);
$to=  explode('*', $_POST['to_table']);

$update1=mysql_query("update table_info set status='".$to[2]."', waiter='".$to[3]."', person='".$to[4]."', order_no='".$to[5]."', o_time='".$to[6]."' where id='".$from[0]."' AND table_name='".$from[1]."'");
$update2=mysql_query("update table_info set status='".$from[2]."', waiter='".$from[3]."', person='".$from[4]."', order_no='".$from[5]."', o_time='".$from[6]."' where id='".$to[0]."' AND table_name='".$to[1]."'");
$update3=mysql_query("update order_list set table_name='".$to[1]."' where order_no='".$from[5]."'");
$update4=mysql_query("update order_list set table_name='".$from[1]."' where order_no='".$to[5]."'");
if($update1 && $update2 && $update3 && $update4)
{
   header('location:admin.php?page=change');
}
else
{
    echo mysql_error();
}
?>
