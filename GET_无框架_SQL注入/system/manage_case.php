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
<title>企业客户案例信息管理页面</title>
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
            <td width="46%" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="5%"><div align="center"><img src="images/tb.gif" width="16" height="16" /></div></td>
                <td width="95%" class="STYLE1"><span class="STYLE3">你当前的位置</span>：[企业客户案例信息管理]</td>
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
        <?php
		$page_size=12;
        $query="select count(*) as total from xy_case order by id desc";
		$result=mysql_query($query);
		$message_count=mysql_result($result,0,"total");
		$page_count=ceil($message_count/$page_size);
		$offset=($page-1)*$page_size;
		$sql=mysql_query("select * from xy_case order by id desc limit $offset,$page_size");
		?>
        <table width="100%" border="0" cellpadding="5" cellspacing="0" onmouseover="changeto()"  onmouseout="changeback()">
          <?php
		  if(mysql_num_rows($sql)==0){
		    echo "暂无数据记录！";
		  }
          while($rs =mysql_fetch_array($sql)){
		  ?>
          <tr>
            <td width="9%" class="td">Case_ID： <?php echo $rs['id'];?></td>
            <td width="12%" height="25" class="td"><a href="edit_case.php?id=<?php echo $rs['id'];?>" style="color:#003399"><?php echo $rs['title'];?></a> </td>
            <td width="30%" class="td">地址：
              <input value="showcase.php?id=<?php echo $rs['id'];?>" /> 
                [<a href="../showcase.php?id=<?php echo $rs['id'];?>" target="_blank" style="color:#003399">访问/浏览页面</a>]</td>
            <td width="29%" class="td">更新时间：<?php echo $rs['c_date'];?></td>
            <td width="6%" class="td"><input type="button" name="Submit3" value="修改" onclick="window.location.href='edit_case.php?id=<?php echo $rs['id'];?>' "  class="button"/></td>
            <td width="14%" class="td">
                <input type="button" name="Submit" value="删除" onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){window.location.href='manage_case.php?del=ok&id=<?php echo $rs['id'];?>';}else{history.go(0);}"  class="button"/>    </td>
          </tr>
          <?php
          }
	    ?>  
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
		  echo "<a href=manage_case.php?page=1>首页</a>&nbsp;";
		  echo "<a href=manage_case.php?page=".($page-1).">上一页</a>&nbsp;";
		}
		if($page<$page_count){
		  echo "<a href=manage_case.php?page=".($page+1).">下一页</a>&nbsp;";
		  echo "<a href=manage_case.php?page=".$page_count.">尾页</a>&nbsp;";
		}
		mysql_free_result($sql);
		?>
        </td>
        <td width="16"><img src="images/tab_20.gif" width="16" height="35" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
if($_GET["del"]==ok){
  $id=$_GET['id'];
  $sql="delete from xy_case where id=$id";
  mysql_query($sql);
  echo "<script language='javascript'>"; 
  echo "alert('信息删除成功！');";
  echo " location='manage_case.php';"; 
  echo "</script>";
}
mysql_close($conn);
?>
