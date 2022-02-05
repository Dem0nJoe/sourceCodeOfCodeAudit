<?php 
include_once '../xyconn.php';
?>
<?php include_once 'session.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/css.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言信息回复页面</title>
</head>
<body>
<?php
if($_GET["act"]){
  $id=$_POST['id'];
  $hf_gbook=$_POST['hf_gbook'];
  $sql="update gbook set hf_gbook='$hf_gbook' where id=$id";
  mysql_query($sql);
  echo "<script language='javascript'>"; 
  echo "alert('恭喜您留言回复成功!');";
  echo " location='manage_gbook.php';"; 
  echo "</script>";
}
$cid=$_GET['id'];
$sql="select * from gbook where id=$cid";
$result=mysql_query($sql);
if(!$num=mysql_num_rows($result))
{
echo "没有这条记录";
echo "<br/>";
echo "<a href='javascript:history.go(-1)'>返回上一页！</a>";
}
else
{
$rs=mysql_fetch_array($result);
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30" background="images/tab_05.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" height="30"><img src="images/tab_03.gif" width="12" height="30" /></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="46%" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="5%"><div align="center"><img src="images/tb.gif" width="16" height="16" /></div></td>
                <td width="95%" class="STYLE1"><span class="STYLE3">你当前的位置</span>：[回复留言信息]</td>
              </tr>
            </table></td>
            <td width="54%">&nbsp;</td>
          </tr>
        </table></td>
        <td width="16"><img src="images/tab_07.gif" width="16" height="30" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="8" background="images/tab_12.gif">&nbsp;</td>
        <td>
        <form name="edit" method="post" action="?act=edit" onsubmit="return chkform();">
        <table width="100%" border="0" align="center" cellpadding="3" cellspacing="0" >
      <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8" >
        <td height="28" width="10%" class="td">留言标题</td>
        <td width="90%"  class="td">
          <?php echo $rs["title"];?> <input type="hidden" name="id" value="<?php echo $rs["id"];?>"></td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
        <td height="25" width="10%" class="td">姓名</td>
        <td class="td"><?php echo $rs["ly_name"];?> </td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
        <td height="25" width="10%" class="td">联系电话</td>
        <td class="td"><?php echo $rs["tel"];?></td>
      </tr>
    <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
        <td height="25" class="td">联系邮箱</td>
        <td class="td"><?php echo $rs["spanail"];?></td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
        <td height="25" class="td">是否隐藏</td>
        <td class="td"><?php if($rs["sf_yc"]==0){?>不隐藏<?php }else{ ?>隐藏<?php }?></td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
        <td height="25" class="td">留言内容</td>
        <td class="td"><?php echo $rs["content"];?></td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
        <td height="25" class="td">留言回复</td>
        <td class="td"><textarea name="hf_gbook" style="width:500px;height:120px;"><?php echo $rs["hf_gbook"];?></textarea></td>
      </tr>
    <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
        <td height="25" class="td">&nbsp;</td>
        <td class="td"><input type="submit" name="button" id="button" value="确认提交"  class="button"/></td>
      </tr>
    </table>
    </form>
    </td>
        <td width="8" background="images/tab_15.gif">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="35" background="images/tab_19.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" height="35"><img src="images/tab_18.gif" width="12" height="35" /></td>
        <td>&nbsp;</td>
        <td width="16"><img src="images/tab_20.gif" width="16" height="35" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
}
mysql_close($conn);
?>
