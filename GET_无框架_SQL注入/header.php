<div class="h_logo">
  <img src="<?php echo $wzlogo;?>" width="<?php echo $wzlogow;?>" height="<?php echo $wzlogoh;?>" alt="<?php echo $wzname;?>" />
</div>
<div class="h_nav">
  <ul>
    <?php 
    $sql="select * from menu order by m_px asc";
    $result=mysql_query($sql);
    while($rs=mysql_fetch_array($result)){
    ?>
    <li><a href="<?php echo $rs['m_url'];?>" target="<?php echo $rs['m_open'];?>" title="<?php echo $rs['m_title'];?>"><?php echo $rs['m_title'];?></a></li>
    <?php
    }
	?>
  </ul>
  <div class="clear"></div>
</div>