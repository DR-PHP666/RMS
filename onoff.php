<?php session_start();

$on=$_POST['on'];

if($on=="true")
{
	$_SESSION['print']='on';
}
else
{
	$_SESSION['print']='off';
}

echo $_SESSION['print'];

 ?>
