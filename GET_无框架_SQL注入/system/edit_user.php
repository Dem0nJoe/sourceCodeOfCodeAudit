<?php 
include_once '../xyconn.php';
?>
<?php include_once 'session.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/css.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script charset="utf-8" src="xyeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="xyeditor/lang/zh_CN.js"></script>
<title>修改信息页面</title>
<script>
var editor;
KindEditor.ready(function(K) {
  editor = K.create('textarea[name="content"]', {
    allowFileManager : true
  });
});
</script>
<script type="text/javascript">
  function chkform(){
    if(document.edit.title.value==""){
	  alert("标题名称不能为空，请返回填写!!");
	  document.edit.title.focus();
	  return false;
	}
	if(document.edit.pl_id.value==""){
	  alert("调用排序ID不能为空，请填写!!");
	  document.edit.pl_id.focus();
	  return false;
	}
	 return true;
  }
</script>
</head>
<body>
<?php
if($_GET["act"]){
  $id=$_POST['id'];
  $m_name=$_POST['m_name'];
  $m_pwd=trim($_POST['m_pwd']);
  $m_pwd1=trim($_POST['m_pwd1']);
  if($m_pwd=="" || $m_pwd<>$m_pwd1){
    $sql="update manage_user set m_name='$m_name' where id=$id";
	mysql_query($sql);
	echo "<script language='javascript'>"; 
  echo "alert('恭喜您，信息修改成功!');";
  echo " location='manage_user.php';"; 
  echo "</script>";
  }else{
  $m_pwd=md5($m_pwd1);
  $sql="update manage_user set m_name='$m_name',m_pwd='$m_pwd' where id=$id";
  mysql_query($sql);
  echo "<script language='javascript'>"; 
  echo "alert('恭喜您，信息修改成功!');";
  echo " location='manage_user.php';"; 
  echo "</script>";
  }
}
$cid=$_GET['id'];
$sql="select * from manage_user where id=$cid";
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
                <td width="95%" class="STYLE1"><span class="STYLE3">你当前的位置</span>：[修改企业基本信息]</td>
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
        <td height="28" width="10%" class="td">管理员账号：</td>
        <td width="90%"  class="td">
          <input name="m_name" type="text" id="m_name" value="<?php echo $rs["m_name"];?>" size="30"  /> <input type="hidden" name="id" value="<?php echo $rs["id"];?>"><img src="images/ts.gif" width="14" height="15" alt="管理员名称"/></td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
        <td height="25" width="10%" class="td">管理密码：</td>
        <td class="td"><input name="m_pwd" type="text" size="50"  /> 
        [不变请留空]</td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
        <td height="25" width="10%" class="td">确认密码：</td>
        <td class="td"><input name="m_pwd1" type="text" size="50" /> 
        </td>
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
