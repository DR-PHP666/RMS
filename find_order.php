<style type="text/css">
table.table_data_view{ background:#e1e1e1;}
table.table_data_view tr td{ background:#ffffff;}
table.table_data_view tr th{ font-weight:normal;}
table.table_data_view tr td img{ width:16px; height:16px;}
</style>
<?php 
include('dbcon_s.php'); 
$from_date=$_POST['from_date'];
$to_date=$_POST['to_date'];
$action=$_POST['action'];
$order_no=$_POST['order_no'];
?>
	<h4 style="margin:0px; text-align:center; font-weight:normal;">Order Of Date <?php echo $from_date; ?> To <?php echo $to_date; ?></h4>
	<table class="table_data_view" style="width:100%;" cellspacing="1">
    	<tr>
            <th>Order No</th>
            <th>Order Date Time</th>
            <th>Table</th>
            <th>Person</th>
            <th>Total</th>
            <th>Discount</th>
            <th>Ser.Cha</th>
            <th>Incv Total</th>
            <th>Vat Total</th>
            <th>Cash</th>
            <?php
                if($action=='on')
                {
                    echo '<th></th>';
                }
            ?>
            <th colspan="3">Action</th>
        </tr>

<?php
if($action=='on')
{
    $action_qu="";
}
else
{
    $action_qu=" AND status='false'";
}
/***/if($from_date=='' && $to_date=='' && $order_no!='')
{
    	$query=mysql_query("select * from order_list where order_no='$order_no' ".$action_qu);
}
/**/else if($from_date!='' && $to_date!='' && $order_no=='')
{
    	$query=mysql_query("select * from order_list where date between '$from_date' AND '$to_date' ".$action_qu);
}
/**/else if($from_date!='' && $to_date!='' && $order_no!='')
{
    $query=mysql_query("select * from order_list where date between '$from_date' AND '$to_date' AND order_no='$order_no'".$action_qu);
}
/**/else if($from_date=='' && $to_date!='' && $order_no=='')
{
    	$query=mysql_query("select * from order_list where date='$to_date'".$action_qu);
}
/**/else if($from_date!='' && $to_date=='' && $order_no=='')
{
    	$query=mysql_query("select * from order_list where date='$from_date'".$action_qu);
}
/**/else if($from_date=='' && $to_date!='' && $order_no!='')
{
    	$query=mysql_query("select * from order_list where date='$to_date' AND order_no='$order_no'".$action_qu);
}
/**/else if($from_date!='' && $to_date=='' && $order_no!='')
{
    $query=mysql_query("select * from order_list where date='$from_date' AND order_no='$order_no'".$action_qu);
}
 else 
{
    $query=mysql_query("select * from order_list where order_no=''".$action_qu);    
}
	while($row=mysql_fetch_array($query))
	{
	?>
    	<tr>
        	<td><?php echo $row['order_no']; ?></td>
        	<td><?php echo $row['date'].' '.$row['time']; ?></td>
        	<td><?php echo $row['table_name']; ?></td>
        	<td><?php echo $row['person']; ?></td>
        	<td><?php echo $row['order_total']; ?></td>
        	<td><?php echo $row['discount']; ?></td>
        	<td><?php echo $row['ser_charge']; ?></td>
        	<td><?php echo $row['incv_total']; ?></td>
        	<td><?php echo $row['vat_total']; ?></td>
        	<td><?php echo $row['cash']; ?></td>
                <?php
                    if($action=='on')
                    {
                 ?>
                <td>
                    <input type="checkbox" onchange="active_inactive('<?php echo $row['order_no']; ?>')" id="check_<?php echo $row['order_no']; ?>"  <?php if($row['status']=='true'){ echo 'checked="checked"';}?>>
                </td>
                <?php
                    }
                ?>
                <td><a href="admin.php?page=order_det&id=<?php echo $row['order_no']; ?>"><img src="img/view.png" /></a></td>
        	<td><img src="img/cancel.png" onclick="delete_full_order('<?php echo $row['order_no']; ?>')" /></td>
        	<td><img src="img/print.png" onclick="print_bill_back('<?php echo $row['order_no']; ?>')" /></td>
        </tr>
    <?php			
	}
?>
