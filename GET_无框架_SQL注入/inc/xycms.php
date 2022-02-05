<?php
/**
 * XYCMS企业建站系统
 * xycms.php
 * @author XY QQ:364500483 Email:yang3rui@163.com
 * @version 0.1
 * @copyright Copyright (c) 2011 - 2012 XYCMS
 */
 //网站系统配置
$sql="select * from config where id=1";
$result=mysql_query($sql);
$rs=mysql_fetch_array($result);
$wzname=$rs['wzname'];
$descriptions=$rs['descriptions'];
$keywords=$rs['keywords'];
$wzurl=$rs['wzurl'];
$icp=$rs['icp'];
$managename=$rs['managename'];
$email=$rs['email'];
$telnum=$rs['telnum'];
$phonenum=$rs['phonenum'];
$faxnum=$rs['faxnum'];
$qqnum=$rs['qqnum'];
$address=$rs['address'];
$wzlogo=$rs['wzlogo'];
$wzlogow=$rs['wzlogow'];
$wzlogoh=$rs['wzlogoh'];
$gbook_sh=$rs['gbook_sh'];
$on_run=$rs['on_run'];
$off_dc=$rs['off_dc'];
if($on_run==1){
  echo $off_dc;
  exit;
}
 
 //关于我们
function common($id,$subtitle){
  $sql="select * from common where id=$id";
  $result=mysql_query($sql);
  $rs=mysql_fetch_array($result);
  echo cut_str($rs['content'],$subtitle,0,'UTF-8');
}

//栏目列表
function xycms_list($table_list,$url_list){
  $sql="select * from {$table_list} order by id asc";
  $result=mysql_query($sql);
  while($rs=mysql_fetch_array($result)){
    echo "<li><a href='".$url_list."?id=".$rs['id']."' target='_self'>".$rs['title']."</a></li>";
  }
}

//概况列表
function xycms_commonlist(){
  $sql="select * from common order by id asc";
  $result=mysql_query($sql);
  while($rs=mysql_fetch_array($result)){
    echo "<li><a href='common.php?id=".$rs['id']."' target='_blank'>".$rs['title']."</a></li>";
  }
}
//首页产品列表
function xycms_prolist($xytop,$xytitle){
  $sql="select * from xy_pro order by id desc limit 0,$xytop";
  $result=mysql_query($sql);
  while($rs=mysql_fetch_array($result)){
    echo "<li><a href='showproducts.php?id=".$rs['id']."' target='_blank'><img src='".$rs['img']."' width='150' height='120' /></a><span><a href='showproducts.php?id=".$rs['id']."' target='_blank'>".cut_str($rs['title'],$xytitle,0,'UTF-8')."</a></span></li>";
  }
}
?>