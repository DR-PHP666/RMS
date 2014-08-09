<?php session_start();
        //ob_start();
	include('dbcon.php');
	if($_SESSION['user'])
        {
            if($_SESSION['user']=='')
            {
                header('location:logout.php');
            }
            else 
             {
                
             }
        
        }
        else 
       {
            header('location:logout.php');
       }
	if($_GET){$tab=$_GET['tab'];}else{$tab='Floor 1';}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Labamba</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="application.js"></script>
<script>
	function on()
		  {
		  
		  	var on=document.getElementById("on").checked;
			
		  	$.post("onoff.php",{on:on},function(data){
				if(data)
				{
					alert("the printer is "+data);
				}
			})
		  }

</script>
</head>

<body style="background:url(img/bg_dotted.png);">
	<div id="tab" class="tab">
    	<ul>
        	<?php
				$query_tab=mysql_query("select * from table_info group by floor");
				while($row_tab=mysql_fetch_array($query_tab))
				{
			?>
            	<li class="<?php if($tab==$row_tab['floor']){echo 'tab_selected';}?>" onclick="a_link('main.php?tab=<?php echo $row_tab['floor']; ?>')"><?php echo $row_tab['floor']; ?></li>
            <?php			
				}
			?>
        </ul>
    </div>
	<div class="total_body" id="total_body">
    
    </div>
    <br /><br />
	<div class="main">
		<?php include('home.php');?>
    </div>
    
    <div id="admin_view" class="admin_view">
    	<ul>
        	<li>
                <a href="<?php if($_SESSION['type']=='admin'){ echo 'admin.php?page=table'; } ?>">Table</a>
            </li>
            <li>
                <a href="admin.php?page=change">Table Change</a>    
        	</li>
            <li>
                <a href="<?php if($_SESSION['type']=='admin'){ echo 'admin.php?page=user'; } ?>">Emplyee</a>    
        	</li>
            <li>
                <a href="<?php if($_SESSION['type']=='admin'){ echo 'admin.php?page=food'; } ?>">Food</a>    
            </li>
            <li>
                <a href="<?php if($_SESSION['type']=='admin'){ echo 'admin.php?page=modify'; } ?>">Modify</a>    
            </li>
            <li>
                <a href="<?php if($_SESSION['type']=='admin'){ echo 'admin.php?page=package'; } ?>">Package</a>    
        	</li>
            <li>
                <a href="<?php if($_SESSION['type']=='admin'){ echo 'admin.php?page=order'; } ?>">Order</a>    
            </li>
            <li>
                <a href="<?php if($_SESSION['type']=='admin'){ echo 'admin.php?page=report'; } ?>">Report</a>    
        	</li>
            <li onclick="print_day_report()" style="cursor:pointer">Day Report</li>
            <li>
                <a href="logout.php">Logout</a>
            </li>
        </ul>
	</div>
	
</body>
</html>
