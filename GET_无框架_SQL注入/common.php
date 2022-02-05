<?php header("Content-type:text/html;charset=utf-8");  ?>
<?php include_once 'xyconn.php';?>
<?php include_once 'inc/function.php';?>
<?php include_once 'inc/xycms.php';?>
<?php
$id=verify_null(verify_id($_GET['id']),"参数");
echo $id
$ssql="select * from common where id=$id";
echo $ssql
$sresult=mysql_query($ssql);
if(!$num=mysql_num_rows($sresult)){
	echo "没有这条记录";
	echo "<br/>";
	echo "<a href='javascript:history.go(-1)'>返回上一页！</a>";
	exit;
	}else{
	 $rss=mysql_fetch_array($sresult);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/index.css" type="text/css" rel="stylesheet" />
<title><?php echo $wzname;?><?php echo $wzurl;?></title>
</head>
<body>
<div id="contain">
  <div id="head">
    <?php include_once 'header.php';?>
  </div>
  <div id="focus">
    <img src="adv/focus.jpg" alt="焦点图" />
  </div>
  <div id="dc">
    <div class="dc_l">
      <div class="dc_l_t">
        <h3>当前位置：首页 > <?php echo $rss['title'];?></h3>
      </div>
      <div class="dc_l_c">
        <div class="dc_l_c_s">
          <div class="dc_l_c_s_t">
            <?php echo $rss['title'];?>
          </div>
          <div class="dc_l_c_s_l">
            信息来源：<?php echo $rss['info_from'];?> 作者：<?php echo $rss['info_auth'];?> 更新时间：<?php echo $rss['c_date'];?>
          </div>
          <div class="dc_l_c_s_c">
            <?php echo $rss['content'];?>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
    <div class="dc_r">
      <div class="dc_r_t">
        <h3>关于我们</h3>
      </div>
      <div class="dc_r_c">
        <div class="dc_r_c_c">
          <ul>
            <?php echo xycms_commonlist();?>
          </ul>
        </div>
      </div>
      <div class="dc_r_t">
        <h3>联系我们</h3>
      </div>
      <div class="dc_r_c">
        <div class="dc_r_c_c">
          <ul>
            <li>公司名：<?php echo $wzname;?></li>
            <li>ADD：<?php echo $wzname;?></li>
            <li>联系人：<?php echo $managename;?></li>
            <li>Phone：<?php echo $phonenum;?></li>
            <li>TEL：<?php echo $telnum;?></li>
            <li>E_mail:<?php echo $email;?></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div id="foot">
    <?php include_once 'footer.php'; ?>
  </div>
</div>
</body>
</html>
