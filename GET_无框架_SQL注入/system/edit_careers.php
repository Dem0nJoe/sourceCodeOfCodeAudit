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
<title>修改下载资料信息页面</title>
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
	  alert("名称不能为空，请返回填写!!");
	  document.edit.title.focus();
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
  $title=$_POST['title'];
  $keywords=$_POST['keywords'];
  $descriptions=$_POST['descriptions'];
  $renshu=$_POST['renshu'];
  $degree=$_POST['degree'];
  $sex=$_POST['sex'];
  $content=$_POST['content'];
  $sql="update xy_zp set title='$title',keywords='$keywords',descriptions='$descriptions',renshu='$renshu',degree='$degree',sex='$sex',content='$content',c_date=now() where id=$id";
  mysql_query($sql);
  echo "<script language='javascript'>"; 
  echo "alert('恭喜您，信息修改成功!');";
  echo " location='manage_careers.php';"; 
  echo "</script>";
}
$cid=$_GET['id'];
$sql="select * from xy_zp where id=$cid";
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
                <td width="95%" class="STYLE1"><span class="STYLE3">你当前的位置</span>：[修改招聘信息]</td>
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
        <td height="28" width="10%" class="td">招聘岗位</td>
        <td width="90%"  class="td">
          <input name="title" type="text" size="30" value="<?php echo $rs["title"];?>"  /> <input type="hidden" name="id" value="<?php echo $rs["id"];?>"><img src="images/ts.gif" width="14" height="15" alt="基本信息标题"/></td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
        <td height="25" width="10%" class="td">网页关键词</td>
        <td class="td"><input name="keywords" type="text" size="50" value="<?php echo $rs["keywords"];?>"  /> 
        [多词语可用符号“|”分开]</td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
        <td height="25" width="10%" class="td">网页描述</td>
        <td class="td"><input name="descriptions" type="text" size="50" value="<?php echo $rs["descriptions"];?>"  /> <img src="images/ts.gif" width="14" height="15" alt="网页描述"/></td>
      </tr>
    <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
        <td height="25" class="td">招聘人数</td>
        <td class="td"><input name="renshu" type="text" id="renshu" value="<?php echo $rs["renshu"];?>" size="4" /> [单位：人]</td>
      </tr>
      <tr onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
        <td height="25" class="td">学历要求</td>
        <td class="td"><select name="degree" id="degree">
          <option <?php if($rs['degree']=="不限"){?> selected="selected"<?php }?> value="不限" selected="selected">不限</option>
          <option <?php if($rs['degree']=="高中以下"){?> selected="selected"<?php }?> value="高中以下">高中以下</option>
          <option <?php if($rs['degree']=="高中"){?> selected="selected"<?php }?> value="高中">高中</option>
          <option <?php if($rs['degree']=="大专"){?> selected="selected"<?php }?> value="大专">大专</option>
          <option <?php if($rs['degree']=="本科"){?> selected="selected"<?php }?> value="大专">本科</option>
          <option <?php if($rs['degree']=="硕士"){?> selected="selected"<?php }?> value="硕士">硕士</option>
          <option <?php if($rs['degree']=="博士"){?> selected="selected"<?php }?> value="博士">博士</option>
        </select></td>
      </tr>
      <tr onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
        <td height="25" class="td">性别要求</td>
        <td class="td"><input type="radio" name="sex" id="radio" value="男" <?php if($rs['sex']=="男"){?> checked="checked"<?php }?>  />男 <input type="radio" name="sex" id="radio" value="女" <?php if($rs['sex']=="女"){?> checked="checked"<?php }?> />女 <input type="radio" name="sex" id="radio" value="不限" <?php if($rs['sex']=="不限"){?> checked="checked"<?php }?> />不限</td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
        <td height="25" class="td">详细信息内容</td>
        <td class="td"><textarea name="content" style="width:670px;height:400px;visibility:hidden;"><?php echo $rs["content"];?></textarea></td>
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
