<?php header("Content-type:text/html;charset=utf-8");  ?>
<?php
session_start();
if($_SESSION['m_name']=="")
{
echo "<script language='javascript'>"; 
echo "alert('操作延时或者无权限操作，请先登陆后继续操作！');";
echo "location='index.php';"; 
echo "</script>";
exit;
}
?>