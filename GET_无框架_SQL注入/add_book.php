<?php include_once 'xyconn.php';?>
<?php include_once 'inc/function.php';?>
<?php include_once 'inc/xycms.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/index.css" type="text/css" rel="stylesheet" />
<title><?php echo $wzname;?></title>
<script language="javascript">
function checkform(){
if(document.form.title.value==''){
      alert('请填写留言标题!!');
      document.form.title.focus();
      return false;
      }
if(document.form.ly_name.value==''){
      alert('请填写留言姓名!!');
      document.form.ly_name.focus();
      return false;
      }
if(document.form.spanail.value==''){
      alert('请填写联系邮箱!!');
      document.form.spanail.focus();
      return false;
      }
if(document.form.spanail.value.indexOf('@') == -1 || document.form.spanail.value.indexOf('.') == -1){
    alert('请填写一个正确的E-Mail!!');
    document.form.spanail.focus();
    return false;
   }
	  return true;

	  }
</script>
</head>
<body>
<div id="contain">
  <div id="head">
    <?php include_once 'header.php';?>
  </div>
  <div id="focus">
    <img src="adv/focus.jpg" alt="焦点图" />
  </div>
  <div id="dc">
    <div class="dc_l">
      <div class="dc_l_t">
        <h3>当前位置：首页 > 在线留言</h3>
      </div>
      <div class="dc_l_c">
        <div class="dc_l_c_c">
          <div class="kf">
            <form name="form" method="post" action="add_book.php?act=ok" onSubmit="return checkform();">
            <table class="tablecss">
              <tr>
                <th><span>*</span>留言标题：</th>
                <td><input name="title" type="text" size="40" /><span>必须填写</span></td>
              </tr>
              <tr>
                <th><span>*</span>姓名：</th>
                <td><input name="ly_name" type="text" size="20" /><span>必须填写，方便联系，网页不会公开</span></td>
              </tr>
              <tr>
                <th>联系电话：</th>
                <td><input name="tel" type="text" size="20" /><span>方便电话联系，网页不会公开</span></td>
              </tr>
              <tr>
                <th><span>*</span>联系邮箱：</th>
                <td><input name="spanail" type="text" size="30" /><span>必须填写，方便电话联系，网页不会公开</span></td>
              </tr>
              <tr>
                <th>是否隐藏：</th>
                <td><input type="radio" name="sf_yc" checked="checked" value="0" />否 <input type="radio" name="sf_yc" value="1" />是
                <span>选择隐藏，问题将不在列表显示，否则将显示</span>
                </td>
              </tr>
              <tr>
                <th><span>*</span>留言内容：</th>
                <td><textarea name="content" rows="7" cols="50"></textarea></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><input type="submit" value="提交信息" /> <input type="reset" value="全部重写" /></td>
              </tr>
            </table>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="dc_r">
      <div class="dc_r_t">
        <h3>快速通道</h3>
      </div>
      <div class="dc_r_c">
        <div class="dc_r_c_c">
          <ul>
            <li><a href="gbook.php" target="_self">查看留言</a></li>
            <li><a href="add_book.php" target="_self">添加留言</a></li>
          </ul>
        </div>
      </div>
      <div class="dc_r_t">
        <h3>联系我们</h3>
      </div>
      <div class="dc_r_c">
        <div class="dc_r_c_c">
          <ul>
            <li>公司名：<?php echo $wzname;?></li>
            <li>ADD：<?php echo $wzname;?></li>
            <li>联系人：<?php echo $managename;?></li>
            <li>Phone：<?php echo $phonenum;?></li>
            <li>TEL：<?php echo $telnum;?></li>
            <li>E_mail:<?php echo $email;?></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div id="foot">
    <?php include_once 'footer.php'; ?>
  </div>
</div>
</body>
</html>
<?php
if($_GET["act"]){
  $title=$_POST['title'];
  $ly_name=$_POST['ly_name'];
  $tel=$_POST['tel'];
  $spanail=$_POST['spanail'];
  $sf_yc=$_POST['sf_yc'];
  $content=$_POST['content'];
  $sql="insert into gbook set title='$title',ly_name='$ly_name',tel='$tel',spanail='$spanail',sf_yc='$sf_yc',content='$content',c_date=now()";
  mysql_query($sql);
  mysql_close($conn);
  echo "<script language='javascript'>"; 
  echo "alert('恭喜您，留言信息添加成功，请等待回复!');";
  echo " location='gbook.php';"; 
  echo "</script>";
}
?>

