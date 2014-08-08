<?php 
include('dbcon.php');
$delete=mysql_query("delete from order_det where order_no='".$_POST['id']."'");
if($delete)
{
	$delete1=mysql_query("delete from order_list where order_no='".$_POST['id']."'");
	if($delete1)
	{
            $update=mysql_query("update table_info set status='free', person='', waiter='', order_no='', o_time='0' where order_no='".$_POST['id']."'");
            if($update)
            { 

            }
            else
            {
                    echo mysql_error();
            }			
	}
	else
	{
		echo mysql_error();
	}	
}
else
{
	echo mysql_error();
}	
?>
