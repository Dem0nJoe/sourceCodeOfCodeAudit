<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/admin.css" type="text/css" rel="stylesheet" />
<title>XYCMS企业建站系统后台管理系统</title>
<script type="text/javascript">
  function chkform(){
    if(document.form.m_name.value==""){
	  alert("用户名不能为空，请填写用户名!!");
	  document.form.m_name.focus();
	  return false;
	}
	if(document.form.m_pwd.value==""){
	  alert("密码不能为空，请填写!!");
	  document.form.m_pwd.focus();
	  return false;
	}
	if(document.form.checkcode.value==""){
	  alert("验证码不能为空!!");
	  document.form.checkcode.focus();
	  return false;
	}
	 return true;
  }
</script>
</head>
<body>
<div id="top">
</div>
<div id="box">
  <div class="login">
    <div class="log_c">
      <div class="log_cc">
        <form name="form" method="post" action="loginpass.php" onsubmit="return chkform();">
        <table width="100%" cellpadding="0" cellspacing="3" height="75">
          <tr>
            <td colspan="2"><input name="m_name" type="text" class="log_put" /></td>
            <td width="56%" rowspan="3" valign="top"><input type="image" src="images/submit.gif" /></td>
          </tr>
          <tr>
            <td colspan="2"><input name="m_pwd" type="password" class="log_put" /></td>
            </tr>
          <tr>
            <td width="26%"><input type="text" name="checkcode" class="log_yzm" /></td>
            <td width="18%"><img src="code.php?act=yes" align="middle"></td>
            </tr>
        </table>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
