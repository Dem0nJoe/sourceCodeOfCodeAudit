<?php
/*************************
PHP通用防注入安全代码
说明：
判断传递的变量中是否含有非法字符
如$_POST、$_GET
功能：
防注入
**************************/
//然后在每个php文件前加include(“checkpostandget.php“);即可

//要过滤的非法字符 

$ArrFiltrate=array("\'\'",";","union"); 

//出错后要跳转的url,不填则默认前一页 

$StrGoUrl=""; 

//是否存在数组中的值 

function FunStringExist($StrFiltrate,$ArrFiltrate){ 

foreach ($ArrFiltrate as $key=>$value){ 

if (eregi($value,$StrFiltrate)){ 

return true; 

} 

} 

return false; 

} 

//合并$_POST 和 $_GET 

if(function_exists(array_merge)){ 

$ArrPostAndGet=array_merge($HTTP_POST_VARS,$HTTP_GET_VARS); 

}else{ 

foreach($HTTP_POST_VARS as $key=>$value){ 

$ArrPostAndGet[]=$value; 

} 

foreach($HTTP_GET_VARS as $key=>$value){ 

$ArrPostAndGet[]=$value; 

} 

} 

//验证开始 

foreach($ArrPostAndGet as $key=>$value){ 

if (FunStringExist($value,$ArrFiltrate)){ 

echo "<script language=\\"javascript\\">alert(\\"Neeao提示，非法字符\\");</script>"; 

if (empty($StrGoUrl)){ 

echo "<script language=\\"javascript\\">history.go(-1);</script>"; 

}else{ 

echo "<script language=\\"javascript\\">window.location=\\"".$StrGoUrl."\\";</script>"; 

} 

exit; 

} 

} 

?>