<div id="print_area" style="width:200px; font-size:12px;">
<?php 
include('dbcon_s.php'); 
$order=$_POST['order'];
$total_price=0;
$total_vat=0;
$find=mysql_query("select * from order_list where order_no='$order'");
$find_row=mysql_fetch_array($find);
$s_charge=$find_row['ser_charge'];
$discount=$find_row['discount'];
$waiter=$find_row['waiter'];
$table=$find_row['table_no'];
$account=$find_row['account'];
$order_date=$find_row['date'].' '. $find_row['time'];
?>
			<h2 style="text-align:center; font-family:Forte; margin:0px; padding:0px;">La Bamba</h2>
            <p style="text-align:center; margin:0px; font-size:12px;">
            	House # 54, Road # 20,<br />
                Sector # 03, Rabindra Sarani<br />
                Uttara, Dhaka-1230<br />
                Phone : 01759783896-7
            </p>
            <p style="text-align:center; margin:0px; font-size:12px;">
            	Guest Bill
            </p>
            Order Date : <?php echo $order_date; ?><br />
            Print Date : <?php echo date('Y-m-d H:i:s', $time_now); ?><br />
            Table No : <?php echo $table; ?>
            Type : Collection<br />
            Waiter Name : <?php $waiter ?><br />
            <p style="text-align:center; margin:0px; font-size:12px;">
            	Order Information
            </p>
            <table cellspacing="0" style="width:100%; font-size:12px;">
                <tr>
                    <th style="text-align:left">Item</th>
                    <th style="text-align:right;">Quan</th>
                    <th style="text-align:right;">Price</th>
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
                    <td style="text-align:left;"><?php echo $row['catagory']; ?></td>
                    <td style="text-align:right;"><?php echo $row['quentity']; ?></td>
                    <td style="text-align:right;"><?php echo $price; ?></td>
                </tr>
            <?php
				$sl++;		
				}
			?>
            	<tr>
    				<td colspan="2" style="text-align:left;">Total Bill</td>
                    <td style="text-align:right"><?php echo $total_price; ?></td>
                </tr>
            	<tr>
    				<td colspan="2" style="text-align:left;">Total Vat</td>
                    <td style="text-align:right"><?php echo $total_vat; ?></td>
                </tr>
            	<tr>
    				<td colspan="1" style="text-align:left;">Service Charge</td>
                    <td style="text-align:right"><?php echo number_format((float)$s_charge*100/$total_price, 2, '.', '');?>%</td>
                    <td style="text-align:right"><?php echo $s_charge; ?></td>
                </tr>
            	<tr>
    				<td colspan="1" style="text-align:left;">Discount</td>
                    <td style="text-align:right"><?php echo number_format((float)$discount*100/$total_price, 2, '.', '');?>%</td>
                    <td style="text-align:right"><?php echo $discount; ?></td>
                </tr>
            	<tr>
    				<td colspan="2" style="text-align:left;">Payable Bill</td>
                    <td style="text-align:right"><?php echo $total_price+$total_vat+$s_charge-$discount; ?></td>
                </tr>

            </table>
            <br />
            <div style="border-bottom:1px dotted #000;"></div>
            <br />
            You've Seved by : <?php echo $account; ?>
</div>            
