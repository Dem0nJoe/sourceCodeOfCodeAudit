<?php include_once 'xyconn.php';?>
<?php include_once 'inc/function.php';?>
<?php include_once 'inc/xycms.php';?>
<?php
if(!file_exists("install/install.lock"))
{
Header("Location:install/install.php");
}
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
  <div id="cont">
    <div class="c_l">
      <div class="c_l_t">
        <h3>产品类别</h3>
      </div>
      <div class="c_l_c">
        <div class="c_l_c_c">
          <ul>
            <?php echo xycms_list("pro_fl","products.php");?>
          </ul>
        </div>
      </div>
      <div class="c_l_t">
        <h3>关于我们</h3>
      </div>
      <div class="c_l_c">
        <div class="c_l_c_c">
          <ul>
            <?php echo xycms_commonlist();?>
          </ul>
        </div>
      </div>
      <div class="c_l_t">
        <h3>联系方式</h3>
      </div>
      <div class="c_l_c">
        <div class="c_l_c_c">
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
    <div class="c_r">
      <div class="c_r_t">
        <h3>关于我们</h3>
      </div>
      <div class="c_r_c">
        <div class="c_r_c_c">
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="68%" valign="top" style="line-height:22px;"><?php echo common(1,200);?>...[<a href="common.php?id=1" target="_blank">详细</a>]</td>
              <td valign="top"><img src="adv/us.jpg" width="220" height="140" /></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="c_r_t">
        <h3>产品展示</h3>
      </div>
      <div class="c_r_c">
        <div class="c_r_c_c">
          <div class="c_r_c_cp">
            <ul>
              <?php echo xycms_prolist(8,18);?>
            </ul>
            <div class="clear"></div>
          </div>   
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
