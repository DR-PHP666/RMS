<?php session_start();

 if($_SESSION['print']=="on")
{?>

<body>

<?php } else{?>
<body  onload="window_print()" >
<?php
}?>


<div id="print_area" style="width:200px;font-size:12px;">
<?php 
include('dbcon_s.php'); 
$order=$_POST['order'];
$type=$_POST['type'];
$food=$_POST['item'];
$act=$_POST['act'];
$find=mysql_query("select * from order_list where order_no='$order'");
$find_row=mysql_fetch_array($find);
$waiter=$find_row['waiter'];
$table=$find_row['table_name'];
$order_date=$find_row['date'].' '. $find_row['time'];
$item="";
?>
			<h2 style="text-align:center; font-family:Forte; margin:0px; padding:0px;">Kabab Factory</h2>
			<p style="text-align:center; margin:0px; font-size:12px;">Kitchen Copy <?php if($act=='all'){echo 'Updated';} ?> / <?php echo $food; ?></p>
            Order No : <?php echo $order; ?><br />
            Print Date : <?php echo date('Y-m-d H:i:s', $time_now); ?><br />
            Order Date : <?php echo $order_date; ?><br />
            <?php echo $table; ?><br />
            Type : Collection <br />
            Waiter Name : <?php echo $waiter; ?><br />
            <table style="width:100%; font-size:12px;">
                <tr>
                    <th style="text-align:left; border-bottom:1px dashed #000;">SL</th>
                    <th style="text-align:left; border-bottom:1px dashed #000;">Item</th>
                    <th style="text-align:right; border-bottom:1px dashed #000;">Qty</th>
                </tr>
			<?php 
                            if($act=='all')
                            {
                                $query=mysql_query("select * from order_det where order_no='$order' and food_type='$type' and food='$food'");
                            }
                            else 
                            {
                                $query=mysql_query("select * from order_det where order_no='$order' and food_type='$type' and print='no' and food='$food'");
                            }
				
				$sl=1;
				$item.="  ~~~~~~~~~~~~~~~~~~~~~~~ \r\n";
				while($row=mysql_fetch_array($query))
				{
				
					$item .= $row['catagory']."\t";
					$item .="Q". $row['quentity']."\r\n";
					$item.="  --------------------------- \r\n";
			?>
                <tr>
                    <td style="text-align:left;border-bottom:1px dashed #000;"><?php echo $sl; ?></td>
                    <td style="text-align:left;border-bottom:1px dashed #000;"><?php echo $row['catagory']; ?>[<?php echo $row['modify']; ?>]</td>
                    <th style="text-align:right;border-bottom:1px dashed #000;"><?php echo $row['quentity']; ?></th>
                </tr>
            <?php
				$sl++;
                               
				}
			?>
            </table>
            <br />
            <div style="border-bottom:1px dashed #000;"></div>
            Order prepared by : <?php echo $_POST['user']; ?>
            
            <?php 
				$update_print=mysql_query("update order_det set print='yes' where order_no='$order' AND food='$food'");
			?>        
</div>
</body>
<?php
$test.="           La Bamba \r\n";
$test.="         Kitchen Copy \r\n";
$test.= "Order No :".$order." \r\n" ;
$test.="Print Date :".$order_date."\r\n";
$test.="Order date :".$order_date."\r\n";
$test.=$table."\r\n";
$test.="Type : Collection \r\n";
$test.="Waiter Name :".$waiter."\r\n";
$test.="\r\n";

$test.=$item;
			//file_put_contents('test.txt', $test);
				//$update_print=mysql_query("update order_det set print='yes' where order_no='$order' AND food_type='$type'");
				//$content = file_get_contents('http://localhost/labamba/print_bill.php');
if($_SESSION['print']=="off")
{
	
}
else
{
				
		if($food=="Kabab Dishes"||"Gravy Dishes" || "Naan/Paratha" )
		{	
		$handle = printer_open('\\\\labamba-pc\\A9 MiniPrinter (Kabab)');
		}
		 if($food=="Thai/Chinese" || "Appetizer/Salad" || "Special Dishes" || "Set")
		{
			//$handle = printer_open('\\\\labamba-pc\\THERMAL LK-TXXX(Kitchen)');
		$handle = printer_open('\\\\labamba-pc1\\A9 MiniPrinter (Chinese)');
		}
		 //if($food = "Kabab Dishes"||"Gravy Dishes" || "Naan/Paratha" || "Thai/Chinese" || "Appetizer/Salad" || "Special Dishes" || "Set")
		//{
		//$handle = printer_open('\\\\labamba-pc\\THERMAL LK-TXXX(Kitchen)');
		//}
		
		
		printer_write($handle, $test);
		printer_close($handle);

}
			?>             
