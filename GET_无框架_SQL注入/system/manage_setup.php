<?php include_once 'session.php';?>
<?php include_once '../xyconn.php';?>
<?php
$sql="select * from config where id=1";
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/css.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="xyeditor/themes/default/default.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script charset="utf-8" src="xyeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="xyeditor/lang/zh_CN.js"></script>
<script>
var editor;
KindEditor.ready(function(K) {
  var editor = K.editor({
					allowFileManager : true
				});
  K('#image').click(function() {
	editor.loadPlugin('image', function() {
	editor.plugin.imageDialog({
	imageUrl : K('#wzlogo').val(),
	clickFn : function(wzlogo, title, width, height, border, align) {
	K('#wzlogo').val(wzlogo);
	editor.hideDialog();
	}
	});
   });
  });
});
</script>
<title>网站系统设置信息页面</title>
</head>
<body>
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
                <td width="95%" class="STYLE1"><span class="STYLE3">你当前的位置</span>：[网站系统设置]</td>
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
        <form name="add" method="post" action="?act=ok">
        <table width="100%" border="0" cellspacing="5" cellpadding="0">
              <tr>
                <td width="9%"><span class="STYLE3">网站名称：</span></td>
                <td width="91%"><input name="wzname" type="text" value=<?php echo html_entity_decode($rs['wzname'],ENT_QUOTES);?> size="50" /> </td>
              </tr>
              <tr>
                <td width="9%"><span class="STYLE3">网站描述：</span></td>
                <td width="91%"><input name="descriptions" type="text" value="<?php echo $rs['descriptions'];?>" size="50" /></td>
              </tr>
              <tr>
                <td width="9%"><span class="STYLE3">网站关键字：</span></td>
                <td width="91%"><input name="keywords" type="text" value="<?php echo $rs['keywords'];?>" size="50" /></td>
              </tr>
              <tr>
                <td width="9%"><span class="STYLE3">网站域名：</span></td>
                <td width="91%"><input name="wzurl" type="text" value="<?php echo $rs['wzurl'];?>" size="50" /> 
                [格式：http://XXXXXXXXX/，后面“/”要带上]</td>
              </tr>
               <tr>
                <td width="9%"><span class="STYLE3">网站ICP号：</span></td>
                <td width="91%"><input name="icp" type="text" value="<?php echo $rs['icp'];?>" size="50" /></td>
              </tr>
              <tr>
                <td width="9%"><span class="STYLE3">联系人姓名：</span></td>
                <td width="91%"><input name="managename" type="text" value="<?php echo $rs['managename'];?>" size="50" /></td>
              </tr>
               <tr>
                <td width="9%"><span class="STYLE3">企业邮箱：</span></td>
                <td width="91%"><input name="email" type="text" value="<?php echo $rs['email'];?>" size="50" /></td>
              </tr>
               <tr>
                <td width="9%"><span class="STYLE3">企业电话：</span></td>
                <td width="91%"><input name="telnum" type="text" value="<?php echo $rs['telnum'];?>" size="20" />&nbsp;&nbsp;&nbsp;<span class="STYLE3">手机：</span><input name="phonenum" type="text" value="<?php echo $rs['phonenum'];?>" size="20" /></td>
              </tr>
               <tr>
                <td width="9%"><span class="STYLE3">企业传真：</span></td>
                <td width="91%"><input name="faxnum" type="text" value="<?php echo $rs['faxnum'];?>" size="20" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="STYLE3">QQ：</span><input name="qqnum" type="text" value="<?php echo $rs['qqnum'];?>" size="20" /></td>
              </tr>
               <tr>
                <td width="9%"><span class="STYLE3">企业地址：</span></td>
                <td width="91%"><input name="address" type="text" value="<?php echo $rs['address'];?>" size="50" /></td>
              </tr>
              <tr>
                <td height="25">网站LOGO</td>
                <td class="td"><input name="wzlogo" type="text" id="wzlogo" value="<?php echo $rs['wzlogo'];?>"  size="30" />
                 <input type="button" id="image" value="选择图片" class="button" /> 
                 图片长<input name="wzlogow" value="<?php echo $rs['wzlogow'];?>" size="4" />&nbsp;图片宽<input name="wzlogoh" value="<?php echo $rs['wzlogoh'];?>" size="4" /> 
                 [单位：px]</td>
              </tr>
              <tr>
                <td width="9%"><span class="STYLE3">留言是否审核：</span></td>
                <td width="91%"><input type="radio" name="gbook_sh" value="0" <?php if($rs['gbook_sh']==0){ ?> checked="checked"<?php }?> />
无需审核　
  <input type="radio" name="gbook_sh" value="1" <?php if($rs['gbook_sh']==1){ ?> checked="checked"<?php }?> />
需要审核</td>
              </tr>
              <tr>
                <td width="9%"><span class="STYLE3">是否关闭网站：</span></td>
                <td width="91%"><input type="radio" name="on_run" value="0" <?php if($rs['on_run']==0){ ?> checked="checked"<?php }?> />
开放　
  <input type="radio" name="on_run" value="1" <?php if($rs['on_run']==1){ ?> checked="checked"<?php }?> />
关闭</td>
              </tr>
              <tr>
                <td width="9%"><span class="STYLE3">网站关闭说明：</span></td>
                <td width="91%"><textarea name="off_dc" cols="50" rows="4"><?php echo $rs['off_dc'];?></textarea> [网站关闭原因描述]</td>
              </tr>
              <tr>
                <td width="9%">&nbsp;</td>
                <td width="91%"><input type="submit" name="button" id="button" value="保存系统设置" class="button" /></td>
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
?>
<?php
if($_GET["act"]==ok){
  $wzname=htmlspecialchars($_POST['wzname'],ENT_QUOTES);
  $keywords=$_POST['keywords'];
  $descriptions=$_POST['descriptions'];
  $wzurl=$_POST['wzurl'];
  $icp=$_POST['icp'];
  $managename=$_POST['managename'];
  $email=$_POST['email'];
  $telnum=$_POST['telnum'];
  $phonenum=$_POST['phonenum'];
  $faxnum=$_POST['faxnum'];
  $qqnum=$_POST['qqnum'];
  $address=$_POST['address'];
  $wzlogo=$_POST['wzlogo'];
  $wzlogow=$_POST['wzlogow'];
  $wzlogoh=$_POST['wzlogoh'];
  $gbook_sh=$_POST['gbook_sh'];
  $on_run=$_POST['on_run'];
  $off_dc=$_POST['off_dc'];
  $sql="update config set wzname='$wzname',keywords='$keywords',descriptions='$descriptions',wzurl='$wzurl',icp='$icp',managename='$managename',email='$email',telnum='$telnum',phonenum='$phonenum',faxnum='$faxnum',qqnum='$qqnum',address='$address',wzlogo='$wzlogo',wzlogow='$wzlogow',wzlogoh='$wzlogoh',gbook_sh='$gbook_sh',on_run='$on_run',off_dc='$off_dc'";
  mysql_query($sql);
  mysql_close($conn);
  echo "<script language='javascript'>"; 
  echo "alert('恭喜您，网站系统设置成功!');";
  echo " location='manage_setup.php';"; 
  echo "</script>";
}
mysql_close($conn);
?>

