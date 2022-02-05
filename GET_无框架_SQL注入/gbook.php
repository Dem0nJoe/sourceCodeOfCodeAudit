<?php include_once 'xyconn.php';?>
<?php include_once 'inc/function.php';?>
<?php include_once 'inc/xycms.php';?>
<?php include_once 'pages.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/index.css" type="text/css" rel="stylesheet" />
<script language=JavaScript src="js/js.js"></script>
<title><?php echo $wzname;?></title>
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
        <h3>当前位置：首页 > 在线留言</h3>
      </div>
      <div class="dc_l_c">
        <div class="dc_l_c_c">
          <div class="kf">
            <table width="100%" border="0" cellspacing="2" cellpadding="0">
             <?php
            //每页显示的条数
			$page_size=12;
			$sub_pages=10;
			//得到当前是第几页
			$pageCurrent=$_GET["page"];
			if(!$pageCurrent) $pageCurrent=1;
			$sub_nums = ($pageCurrent-1)*$page_size;
			$subPage_link="gbook.php?page=";
			$query="select count(*) as total from gbook order by id desc";
			$sqlsql = "select * from gbook order by id desc limit $sub_nums,$page_size";
			$res=mysql_query($query);
			$nums=mysql_result($res,0,"total");
			if($nums==0){
			  echo "暂无信息记录！";
			}
			$ttd=mysql_query($sqlsql);
			$j=1;
			while($rs =mysql_fetch_array($ttd)){
			?>
              <tr>
                <td width="56" height="40" align="right" class="dotline">
                  <img src="images/ques.gif" width="39" height="36">
                </td>
                <td width="646" height="40" class="dotline">
                  <a onClick="javascript:ShowFLT(<?php echo $j;?>)" href="javascript:void(null)"><?php echo $rs['title'];?></a></td>
              </tr>
              <tr id=LM<?php echo $j;?> style="DISPLAY: none;">
                <td height="30" align="right" bgcolor="#f5f9ed"><img src="images/an.gif" width="14" height="15" hspace="5"></td>
                <td height="30" bgcolor="#f5f9ed"><?php echo $rs['hf_gbook'];?></td>
              </tr>
              <?php $j=$j+1;?>
              <?php }?>
            </table> 
            <div class="pages"><?php $subPages=new SubPages($page_size,$nums,$pageCurrent,$sub_pages,$subPage_link,2); ?></div>
          </div>
        </div>
      </div>
    </div>
    <div class="dc_r">
      <div class="dc_r_t">
        <h3>快速通道</h3>
      </div>
      <div class="dc_r_c">
        <div class="dc_r_c_c">
          <ul>
            <li><a href="gbook.php" target="_self">查看留言</a></li>
            <li><a href="add_book.php" target="_self">添加留言</a></li>
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
