<?php
$link= mysql_connect("localhost","root","") or die("could not connection");
mysql_select_db("cse470",$link) or die("Could not connect database");
date_default_timezone_set('Asia/Dhaka');
$time_now=mktime(date('h')-1);
?>
