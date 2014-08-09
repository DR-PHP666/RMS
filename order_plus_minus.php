<?php
include('dbcon_s.php');


$query=  mysql_query("select * from order_det where id='".$_POST['id']."'");
$row=  mysql_fetch_array($query);
$price=$row['price'];
$total_price=$price*$_POST['quantity'];
$action = $_POST['action']; 
$update=  mysql_query("update order_det set quentity='".$_POST['quantity']."', total_price='$total_price' where id='".$_POST['id']."'");



// void part
$queryv=  mysql_query("select * from void_det where id='".$_POST['id']."'");
$rowv=  mysql_fetch_array($queryv);
$priceV=$row['price'];
    $quantityV= 1;
    $order= $row['order_no'];
        $foodc = $row['food_code'];
        $food = $row['food'];
        $catagory = $row['catagory'];
        $foodT = $row['food_type'] ;
        $prc = $row['price'];  //price
        $vat = $row['vat'];
    //$total_priceV=$priceV* $quantityV;
    if ($action == 'minus'){
    if ( $rowv == ""){
        $total_priceV=$priceV* $quantityV;
        $update1 = mysql_query("insert into void_det set quentity='$quantityV', total_price='$total_priceV', order_no= '$order' , food_code = '$foodc' ,catagory = '$catagory' , food = '$food' , food_type = '$foodT' , price = '$prc' , vat= '$vat'  , id='".$_POST['id']."'");
    }else {
        $quantityV = $rowv['quentity'] + 1;
        $total_priceV=$priceV* $quantityV;
       $update1= mysql_query("update void_det set quentity='$quantityV', total_price='$total_priceV' where id='".$_POST['id']."'");
    }
    }else if ($action == 'plus') {
       $update1= 'TRUE'; 
    }


//ends
if($update && $update1)
{
    echo 'ok';
}
else 
{
    echo mysql_error();
}
?>
