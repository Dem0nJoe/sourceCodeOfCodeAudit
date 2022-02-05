<?php include_once '../xyconn.php';?>
<?php include_once 'session.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/css.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script charset="utf-8" src="xyeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="xyeditor/lang/zh_CN.js"></script>
<script>
var editor;
KindEditor.ready(function(K) {
  editor = K.create('textarea[name="content"]', {
    allowFileManager : true
  });
  var uploadbutton = K.uploadbutton({
  button : K('#uploadButton')[0],
  fieldName : 'imgFile',
  url : 'xyeditor/php/upload_json.php?dir=file',
  afterUpload : function(data) {
    if (data.error === 0) {
	var url = K.formatUrl(data.url, 'absolute');
	K('#url').val(url);
	} else {
	alert(data.message);
	}
	},
  afterError : function(str) {
  alert('自定义错误信息: ' + str);
  }
  });
  uploadbutton.fileBox.change(function(e) {
  uploadbutton.submit();
  });
});
</script>
<title>添加下载资料信息页面</title>
<script type="text/javascript">
  function chkform(){
    if(document.add.title.value==""){
	  alert("标题名称不能为空，请返回填写!!");
	  document.add.title.focus();
	  return false;
	}
	 return true;
  }
</script>
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
                <td width="95%" class="STYLE1"><span class="STYLE3">你当前的位置</span>：[添加下载资料信息]</td>
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
        <form name="add" method="post" action="?act=ok" onsubmit="return chkform();">
        <table width="100%" border="0" align="center" cellpadding="3" cellspacing="0" >
      <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8" >
        <td height="28" width="10%" class="td">网页标题</td>
        <td width="90%"  class="td">
          <input name="title" type="text" size="30"  /> <img src="images/ts.gif" width="14" height="15" alt="基本信息标题"/></td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8" >
        <td height="28" width="10%" class="td">下载分类</td>
        <td width="90%"  class="td">
          <select name="p_id" id="p_id">
            <?php
            $conet="select * from down_fl order by pl_id asc";
			$result=mysql_query($conet);
			while($rs=mysql_fetch_array($result)){
			?>
            <option value="<?php echo $rs['id'];?>"><?php echo $rs['title'];?></option>
            <?php 
			}
			?>
          </select>
        </td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
        <td height="25" width="10%" class="td">网页关键词</td>
        <td class="td"><input name="keywords" type="text" size="50"  /> 
        [多词语可用符号“|”分开]</td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
        <td height="25" width="10%" class="td">网页描述</td>
        <td class="td"><input name="descriptions" type="text" size="50"  /> <img src="images/ts.gif" width="14" height="15" alt="网页描述"/></td>
      </tr>
    <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
        <td height="25" class="td">下载地址</td>
        <td class="td"><input name="url" type="text" id="url" value="" readonly="readonly" /> <input type="button"  id="uploadButton" value="上传资料" /></td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
        <td height="25" class="td">信息来源</td>
        <td class="td"><input name="info_from" type="text" size="30" value="本站" /></td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
        <td height="25" class="td">发布作者</td>
        <td class="td"><input name="info_auth" type="text"  size="30" value="admin" /></td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
        <td height="25" class="td">主题信息内容</td>
        <td class="td"><textarea name="content" style="width:670px;height:400px;visibility:hidden;"></textarea></td>
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
if($_GET["act"]){
  $title=$_POST['title'];
  $keywords=$_POST['keywords'];
  $descriptions=$_POST['descriptions'];
  $p_id=$_POST['p_id'];
  $url=$_POST['url'];
  $info_from=$_POST['info_from'];
  $info_auth=$_POST['info_auth'];
  $content=$_POST['content'];
  $sql="insert into xy_download set title='$title',keywords='$keywords',descriptions='$descriptions',p_id='$p_id',url='$url',info_from='$info_from',info_auth='$info_auth',content='$content',c_date=now()";
  mysql_query($sql);
  mysql_close($conn);
  echo "<script language='javascript'>"; 
  echo "alert('恭喜您，信息添加成功，点击继续添加!');";
  echo " location='add_down.php';"; 
  echo "</script>";
}
?>
