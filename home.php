    	<?php 
				$waiting=0;
				$ordered=0;
				$free=0;
		?>
            <div class="floor">
                <div class="flor_name">
                    <?php echo $tab; ?>
                </div>
                <div style="clear:both"></div>
                <div class="table_list">
                <?php
                    $query1=mysql_query("select * from table_info where floor='$tab'");
                    while($row1=mysql_fetch_array($query1))
                    {
						$duration='';
						if($row1['status']=='free')
						{
							$free++;
						}
						else if($row1['status']=='waiting')
						{
							$waiting++;
							$duration=time()-$row1['o_time'];	
						}
						else if($row1['status']=='ordered')
						{
							$ordered++;
							$duration=time()-$row1['o_time'];	
						}
                ?>
                        <div class="table <?php echo $row1['status']; ?>" onclick="show_action('<?php echo $row1['table_name']; ?>', '<?php echo $row1['status']; ?>')">
                        	<div class="table_status">
                         		<img src="img/<?php echo $row1['status'];?>.png" /><span><?php echo $row1['table_name']; ?> </span>  
                            </div>
                            <img src="img/cover.png" /> <?php echo $row1['person'];?><br />
                            <img src="img/clock.png" /> <?php echo ceil($duration/60).'m'; ?> <br />
                            <img src="img/waiter.png" /><b><?php echo $row1['waiter'];?></b>
                        </div>
                <?php					
                    }
                ?>
                </div>
                <div class="floor_status">
                	<img src="img/waiting.png" />Waiting (<?php echo $waiting; ?>)  <img src="img/free.png" /> Free (<?php echo $free; ?>)  <img src="img/ordered.png" /> Ordered (<?php echo $ordered; ?>)                  </div>
            </div>
