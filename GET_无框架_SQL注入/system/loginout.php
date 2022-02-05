<?php 
session_start();
header('Content-Type:text/html;charset=utf-8');
$_SESSION["m_name"]="";
echo "<script language='javascript'>"; 
echo "alert('恭喜你，退出成功！！');";
echo " location='index.php';"; 
echo "</script>";
?>