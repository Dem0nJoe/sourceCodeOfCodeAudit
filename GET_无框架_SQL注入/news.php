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
        <h3>当前位置：首页 > 新闻动态</h3>
      </div>
      <div class="dc_l_c">
        <div class="dc_l_c_c">
          <ul>
            <?php
			$id=trim($_GET['id']);
            //每页显示的条数
			$page_size=20;
			$sub_pages=10;
			//得到当前是第几页
			$pageCurrent=$_GET["page"];
			if(!$pageCurrent) $pageCurrent=1;
			$sub_nums = ($pageCurrent-1)*$page_size;
			if($id==""){
			  $subPage_link="news.php?page=";
			  $query="select count(*) as total from news order by id desc";
			  $sqlsql = "select * from news order by id desc limit $sub_nums,$page_size";
			}
			else
			{
			  $subPage_link="news.php?id=$id&page=";
			  $query="select count(*) as total from news where p_id=$id order by id desc";
			  $sqlsql = "select * from news where p_id=$id order by id desc limit $sub_nums,$page_size";
			}
			
			$res=mysql_query($query);
			$nums=mysql_result($res,0,"total");
			if($nums==0){
			  echo "暂无信息记录！";
			}
			$ttd=mysql_query($sqlsql);
			while($rs =mysql_fetch_array($ttd)){
			?>
            <li><span><?php echo $rs['c_date'];?></span><a href="shownews.php?id=<?php echo $rs['id'];?>" target="_self"><?php echo $rs['title'];?></a></li>
			<?php } ?>
          </ul>
          <div class="clear"></div>
          <ul class="pages"><?php $subPages=new SubPages($page_size,$nums,$pageCurrent,$sub_pages,$subPage_link,2); ?></ul>
        </div>
      </div>
    </div>
    <div class="dc_r">
      <div class="dc_r_t">
        <h3>新闻类别</h3>
      </div>
      <div class="dc_r_c">
        <div class="dc_r_c_c">
          <ul>
            <?php echo xycms_list("news_fl","news.php");?>
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
