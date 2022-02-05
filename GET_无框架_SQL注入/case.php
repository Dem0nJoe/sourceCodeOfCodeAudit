<?php include_once 'xyconn.php';?>
<?php include_once 'inc/function.php';?>
<?php include_once 'inc/xycms.php';?>
<?php include_once 'pages.php';?>
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
        <h3>当前位置：首页 > 客户案例</h3>
      </div>
      <div class="dc_l_c">
        <div class="dc_l_c_c">
          <?php
            //每页显示的条数
			$page_size=10;
			$sub_pages=10;
			//得到当前是第几页
			$pageCurrent=$_GET["page"];
			if(!$pageCurrent) $pageCurrent=1;
			$sub_nums = ($pageCurrent-1)*$page_size;
			$subPage_link="case.php?page=";
			$query="select count(*) as total from xy_case order by id desc";
			$sqlsql = "select * from xy_case order by id desc limit $sub_nums,$page_size";
			$res=mysql_query($query);
			$nums=mysql_result($res,0,"total");
			if($nums==0){
			  echo "暂无信息记录！";
			}
			$ttd=mysql_query($sqlsql);
			while($rs =mysql_fetch_array($ttd)){
			?>
          <div class="kf">
            <div class="kf_l">
              <a href="showcase.php?id=<?php echo $rs['id'];?>" target="_blank"><img src="<?php echo $rs['img'];?>" width="240" height="100" /></a>
            </div>
            <div class="kf_r">
              <div class="kf_r_t">
                <a href="showcase.php?id=<?php echo $rs['id'];?>" target="_blank"><?php echo $rs['title'];?></a>
              </div>
              <div class="kf_r_c">
                <?php echo $rs['case_dc'];?>
              </div>
            </div>
            <div class="clear"></div>
          </div>
          <div class="line6">
          </div>
          <?php } ?>
          <div class="pages"><?php $subPages=new SubPages($page_size,$nums,$pageCurrent,$sub_pages,$subPage_link,2); ?></div>
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
