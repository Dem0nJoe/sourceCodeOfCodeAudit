<?php include_once 'session.php';?>
<?php 
include_once '../xyconn.php';
if(isset($_GET['page'])){
  $page=$_GET['page'];
}else{
  $page=1;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/css.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>导航菜单管理</title>
<script>
var  highlightcolor='#c1ebff';
var  clickcolor='#51b2f6';
function  changeto(){
source=event.srcElement;
if  (source.tagName=="TR"||source.tagName=="TABLE")
return;
while(source.tagName!="TD")
source=source.parentElement;
source=source.parentElement;
cs  =  source.children;
//alert(cs.length);
if  (cs[1].style.backgroundColor!=highlightcolor&&source.id!="nc"&&cs[1].style.backgroundColor!=clickcolor)
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor=highlightcolor;
}
}

function  changeback(){
if  (event.fromElement.contains(event.toElement)||source.contains(event.toElement)||source.id=="nc")
return
if  (event.toElement!=source&&cs[1].style.backgroundColor!=clickcolor)
//source.style.backgroundColor=originalcolor
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor="";
}
}

function  clickto(){
source=event.srcElement;
if  (source.tagName=="TR"||source.tagName=="TABLE")
return;
while(source.tagName!="TD")
source=source.parentElement;
source=source.parentElement;
cs  =  source.children;
//alert(cs.length);
if  (cs[1].style.backgroundColor!=clickcolor&&source.id!="nc")
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor=clickcolor;
}
else
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor="";
}
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
            <td width="90%" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="2%"><div align="center"><img src="images/tb.gif" width="16" height="16" /></div></td>
                <td width="88%" class="STYLE1"><span class="STYLE3">你当前的位置</span>：[网站首页导航菜单管理]</td>
                <td width="2%" class="STYLE1"><img src="images/22.gif" width="14" height="14" /></td>
                <td width="8%" class="STYLE1"><a href="add_menu.php" target="main">添加首页菜单</a></td>
              </tr>
            </table></td>
            <td width="10%">&nbsp;</td>
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
        <?php
		$page_size=12;
        $query="select count(*) as total from menu order by m_px asc";
		$result=mysql_query($query);
		$message_count=mysql_result($result,0,"total");
		$page_count=ceil($message_count/$page_size);
		$offset=($page-1)*$page_size;
		$sql=mysql_query("select * from menu order by m_px asc limit $offset,$page_size");
		?>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
          <tr bgcolor="#DDEFF9" align="center" style="line-height:26px;">
            <td width="6%" class="td">ID</td>
            <td width="20%" class="td">栏目名称</td>
            <td width="26%" class="td">链接</td>
            <td width="22%" class="td">打开方式</td>
            <td width="14%" class="td">排序</td>
            <td width="12%" class="td">基本操作</td>
          </tr>
          <?php
		  if(mysql_num_rows($sql)==0){
		    echo "暂无数据记录！";
		  }
          while($rs =mysql_fetch_array($sql)){
		  ?>
          <form name="form<?php echo $rs['id'];?>" method="post" action="?edit=ok">
          <tr>
            <td><div align="center"><?php echo $rs['id'];?><input name="id" type="hidden" size="15"  value="<?php echo $rs['id'];?>"/></div></td>
            <td><div align="center"><input name="m_title" type="text" value="<?php echo $rs['m_title'];?>" /></div></td>
            <td><div align="center"><input name="m_url" type="text" value="<?php echo $rs['m_url'];?>" /></div></td>
            <td><div align="center"><select name="m_open" id="m_open">
              <option value="_blank" <?php if($rs['m_open']=="_blank"){ ?> selected="selected"<?php } ?>>新窗口</option>
              <option value="_self" <?php if($rs['m_open']=="_self"){ ?> selected="selected"<?php } ?>>本窗口</option>
            </select></div></td>
            <td><div align="center"><input name="m_px" type="text" value="<?php echo $rs['m_px'];?>" size="4" />
            </div></td>
            <td><div align="center"><input type="submit" name="button" id="button2" value="修改"  class="button"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" name="Submit" value="删除" onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){window.location.href='manage_menu.php?del=ok&id=<?php echo $rs['id'];?>';}else{history.go(0);}"  class="button"/> </div></td>
          </tr>
          </form>
          <?php
          }
	    ?>
          <tr></tr>
<tr></tr>
        </table>
        </td>
        <td width="8" background="images/tab_15.gif">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="35" background="images/tab_19.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" height="35"><img src="images/tab_18.gif" width="12" height="35" /></td>
        <td>页次：<?php echo $page;?>/<?php echo $page_count;?>页&nbsp;记录：<?php echo $message_count;?>条&nbsp;
        <?php 
		if($page!=1){
		  echo "<a href=manage_careers.php?page=1>首页</a>&nbsp;";
		  echo "<a href=manage_careers.php?page=".($page-1).">上一页</a>&nbsp;";
		}
		if($page<$page_count){
		  echo "<a href=manage_careers.php?page=".($page+1).">下一页</a>&nbsp;";
		  echo "<a href=manage_careers.php?page=".$page_count.">尾页</a>&nbsp;";
		}
		mysql_free_result($sql);
		?></td>
        <td width="16"><img src="images/tab_20.gif" width="16" height="35" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
if($_GET["edit"]=="ok"){
  $cid=$_POST['id'];
  $m_title=$_POST['m_title'];
  $m_url=$_POST['m_url'];
  $m_open=$_POST['m_open'];
  $m_px=$_POST['m_px'];
  $sql="update menu set m_title='$m_title',m_url='$m_url',m_open='$m_open',m_px='$m_px' where id=$cid";
  mysql_query($sql);
  mysql_close($conn);
  echo "<script language='javascript'>"; 
  echo "alert('恭喜您，导航菜单信息修改成功，点击继续管理!');";
  echo " location='manage_menu.php';"; 
  echo "</script>";
}
?>
<?php
if($_GET["del"]==ok){
  $id=$_GET['id'];
  $sql="delete from menu where id=$id";
  mysql_query($sql);
  echo "<script language='javascript'>"; 
  echo "alert('信息删除成功！');";
  echo " location='manage_menu.php';"; 
  echo "</script>";
}
mysql_close($conn);
?>
