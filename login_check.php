<?php 
include('dbcon.php');
$user=$_POST['login_user'];
$pass=md5($_POST['login_pass']);
$sql='SELECT * FROM user WHERE user="'.$user.'"';
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1)
{
	$row=mysql_fetch_array($result);
	$usert=$row['user'];
	$passt=$row['password'];
	$status=$row['status'];
	if($status=='active')
	{
		if($usert==$user && $passt==$pass)
		{
			$_SESSION['user']=$row['user'];
			$_SESSION['name']=$row['name'];
			$_SESSION['type']=$row['permission'];
                        $_SESSION['actual']='off';
                        $_SESSION['terminal']=$_POST['login_terminal'];
						$_SESSION['print']='on';
			if($row['permission']=='admin')
			{
				header('location:main.php');	
			}
			else if($row['permission']=='account')
			{
				header('location:main.php');	
			}
			else
			{
				header('location:index.php?page=login');	
			}
			
		}
		else
		{
				header('location:index.php');				
		}
	}
	else
	{
		header('location:index.php');
	}
}
else
{
	header('location:index.php');
}
?>
