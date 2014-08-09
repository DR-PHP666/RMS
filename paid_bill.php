<?php
	include('dbcon_s.php');
	$table=$_POST['table'];
	$order=$_POST['order'];
	$s_charge=$_POST['s_charge'];
	$discount=$_POST['discount'];
        $terminal=$_POST['terminal'];
	$total_price=$_POST['total_bill'];
        $total_payable=$_POST['total_payable'];
	$total_vat=$_POST['total_vat'];
	$incvat=$total_price+$total_vat-$discount;
	$cash=$total_price+$total_vat+$s_charge-$discount;
	$update_order_list=mysql_query("update order_list set terminal='$terminal', order_total='$total_price', discount='$discount', ser_charge='$s_charge', vat_total='$total_vat', incv_total='$incvat', cash='$cash', paid='yes' where order_no='$order'");

	$update_order_det=mysql_query("update order_det set paid='yes' where order_no='$order'");

	$update_table_info=mysql_query("update table_info set status='free', person='', waiter='', order_no='', o_time='0' where table_name='$table'");
	if($update_table_info)
	{
	echo "Paid Successfully";	
	}
	else
	{
		echo mysql_error();	
	}
?>
