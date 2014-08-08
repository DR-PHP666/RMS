<?php 
        ob_start();
		include('dbcon_s.php');
        session_start();
        if($_SESSION['type'] && $_SESSION['type']=='admin'){}
        elseif($_GET['page']=='change') {}
		elseif($_GET['page']=='order_det' && $_SESSION['type_ext'] && $_SESSION['type_ext']=='admin' && $_SESSION['order_ext'] && $_SESSION['order_ext']==$_GET['id']){}
        else 
        {
            header('location:main.php');
        }
	if($_GET){$page=$_GET['page'];}else{$page='home';}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Labamba</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="application.js"></script>
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<link rel="stylesheet" type="text/css" href="jsDatePick_ltr.min.css" />
<script type="text/javascript">
	window.onload = function()
	{
		new JsDatePick(
		{
			useMode:2,
			target:"from_date",
			dateFormat:"%Y-%m-%d"
		});
		new JsDatePick(
		{
			useMode:2,
			target:"to_date",
			dateFormat:"%Y-%m-%d"
		});
	};
</script>
</head>

<body style="background:url(img/bg_dotted.png);">
	<div class="total_body" id="total_body">
    
    </div>
	<div class="main">
		<?php include('admin/'.$page.'.php');?>
    </div>
</body>
</html>
