<div id="print_area" style="width:200px; font-size:12px;">
<?php 
include('dbcon_s.php'); 
$order=$_POST['order'];
$s_charge=$_POST['s_charge'];
$discount=$_POST['discount'];

$sta=$_POST['sta'];
$back_tk=$_POST['back_tk'];
mysql_query("update order_list set discount='$discount' where order_no='$order' ");
$total_price=0;
$total_vat=0;
$find=mysql_query("select * from order_list where order_no='$order'");
$find_row=mysql_fetch_array($find);
$waiter=$find_row['waiter'];
$table=$find_row['table_name'];
$person=$fine_row['person'];
$terminal=$find_row['terminal'];
$order_date=$find_row['date'].' '. $find_row['time'];
?>
            <h2 style="text-align:center; font-family:TIMES; margin:0px; padding:0px;">La Bamba LB</h2>
            <p style="text-align:center; margin:0px; font-size:12px;">
            	House # 54, Road # 20,<br />
                Sector # 03, Rabindra Sarani<br />
                Uttara, Dhaka-1230<br />
                Phone : 01759783896-7
            </p>
            <p style="text-align:center; margin:0px; font-size:12px; margin:7px;">
            	Guest Bill
            </p>
            Order ID : <?php echo $order; ?><br>
            <?php echo $table; ?><br>
            Print Date : <?php echo date('Y-m-d H:i:s', $time_now); ?><br />
            Cover : <?php echo $person; ?>
            Waiter Name : <?php echo $waiter; ?><br />
            <p style="text-align:center; margin:0px; font-size:12px;">
            	- - - - - - -Order Information- - - - - - - -
            </p>
            <table cellspacing="0" style="width:100%; font-size:12px;">
                <tr>
                    <th style="text-align:left;border-bottom:1px dashed #000; border-top:1px dashed #000;">Item</th>
                    <th style="text-align:right;border-bottom:1px dashed #000; border-top:1px dashed #000;">Qty</th>
                    <th style="text-align:right;border-bottom:1px dashed #000; border-top:1px dashed #000;">Price</th>
                </tr>
			<?php 
				$query=mysql_query("select * from order_det where order_no='$order'");
				$sl=1;
				while($row=mysql_fetch_array($query))
				{
					$price=$row['total_price'];
					$vat=$row['total_price']*($row['vat']/100);
					$total_price=$total_price+$price;
					$total_vat=$total_vat+$vat;
					
			?>
                <tr>
                    <td style="text-align:left;border-bottom:1px dashed #000;"><?php echo $row['catagory']; ?></td>
                    <td style="text-align:right;border-bottom:1px dashed #000;"><?php echo $row['quentity']; ?></td>
                    <td style="text-align:right;border-bottom:1px dashed #000;"><?php echo $price; ?></td>
                </tr>
            <?php
				$sl++;		
				}
			?>
            	<tr>
    				<td colspan="2" style="text-align:left;">Order Total</td>
                    <td style="text-align:right"><?php echo $total_price; ?></td>
                </tr>
            	<tr>
    				<td colspan="2" style="text-align:left;">Vat Total</td>
                    <td style="text-align:right"><?php echo $total_vat; ?></td>
                </tr>
                <?php
                
                if(number_format((float)$s_charge, 2, '.', '')>0)
                {        
                ?>
            	<tr>
    				<td colspan="1" style="text-align:left;">Service Charge</td>
                    <td style="text-align:right"><?php echo number_format((float)$s_charge*100/$total_price, 2, '.', '');?>%</td>
                    <td style="text-align:right"><?php echo $s_charge; ?></td>
                </tr>
                <?php
                }
                ?>
                <?php
                
                if(number_format((float)$discount, 2, '.', '')>0)
                {        
                ?>
                <tr>
    				<td colspan="1" style="text-align:left;">Discount</td>
                    <td style="text-align:right;"><?php echo number_format((float)$discount*100/$total_price, 2, '.', '');?>%</td>
                    <td style="text-align:right;"><?php echo $discount; ?></td>
                </tr>
                <?php
                }
                ?>
            	<tr>
    			<th colspan="2" style="text-align:left;border-bottom:1px dashed #000; border-top:1px dashed #000;">Total Payable</th>
                    <th style="text-align:right;border-bottom:1px dashed #000; border-top:1px dashed #000;"><?php echo $total_price+$total_vat+$s_charge-$discount; ?></th>
                </tr>
                <?php if($sta=='paid')
                {
                ?>
            	<tr>
    			<th colspan="2" style="text-align:left;border-bottom:1px dashed #000; border-top:1px dashed #000;">Pay Back</th>
                    <th style="text-align:right;border-bottom:1px dashed #000; border-top:1px dashed #000;"><?php echo $back_tk; ?></th>
                </tr>
                
                <?php
                }   
                 ?>

            </table>
            You've Seved by : <?php echo $_POST['user']; ?><br>
            Terminal Name :<?php echo $terminal;?> <br>
            <div style=" border-bottom:1px dashed #000; margin-top:10px;"></div>
            Vat Registration No: 5111110711
            <div style=" border-bottom:1px dashed #000;"></div>
            IN TASTE WE TRUST

            

<?php
/*
	$incvat=$total_price+$total_vat-$discount;
	$cash=$total_price+$total_vat+$s_charge-$discount;
	$update_order_list=mysql_query("update order_list set order_total='$total_price', discount='$discount', ser_charge='$s_charge', vat_total='$total_vat', incv_total='$incvat', cash='$cash' where order_no='$order'");

	$update_table_info=mysql_query("update table_info set status='waiting' where table_no='$table'");
*/
?>

            
            
</div>            
