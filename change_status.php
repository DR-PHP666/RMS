<?php
    include('dbcon.php');
    $update=  mysql_query("update order_list set status='".$_POST['sta']."' where order_no='".$_POST['id']."'");
    if($update)
    {
      echo 'updated';
    }
    else 
        {
     echo mysql_error();
}
?>
