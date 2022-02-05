<?php
session_start();
header('Content-Type:text/html;charset=utf-8'); 
//登录验证
include_once'../xyconn.php';
include_once'../inc/function.php';
if(strtolower($_POST["checkcode"])==strtolower($_SESSION["randval"])){
  unset($_SESSION["randval"]);//释放session中的变量
}else{
  $errs="验证码输入有误!";
  unset($_SESSION["randval"]);
}
if(isset($_POST["m_name"]) && isset($_POST["m_pwd"]) && isset($_POST["checkcode"])){
  $m_name=xy_rep(trim($_POST["m_name"]));
  $m_pwd=md5($_POST["m_pwd"]);
  $sql="select * from manage_user where m_name='".$m_name."' and m_pwd='".$m_pwd."'";
  $result=mysql_query($sql);
  if(!mysql_num_rows($result)==0){
    $_SESSION["m_name"] = $m_name;
  }else{
    $errs=$errs."帐号和密码有误!";
  }
}
if($errs){
  echo $errs;
  echo "<a href='index.php'>请返回重新登陆!</a>";
  exit;
}else{
  echo "<script language='javascript'>"; 
  echo "alert('恭喜您，登陆成功!');";
  echo "location='xycms.php';"; 
  echo "</script>";
}
?>
