<?php
/*
*������֧��QQ��364500483
*XYCMS��ҵ��վϵͳPHP��
*/
session_start();//����session
$randval;
for($i = 0; $i<4; $i++){
    //����A-Z֮���ASCII�����
    $randstr = mt_rand(ord('A'), ord('Z'));//ord($str)�����ַ���ASCII
    $randv = mt_rand(0, 10);//����0��10
    global $randval;
    //����0-9֮��������
    if($randv % 2 == 0){//�����ż��,��������
        $randval .= mt_rand(0, 9);
    }else{//�������������ַ�,��chr��ȡ
        $randval .= chr($randstr);//chr()�������Ӧ�� ascii ��ָ���ĵ����ַ��� 
    }
}
$_SESSION["randval"] = $randval;
$intheight = 18;//��֤�뱳��ͼ�ĸ�
$intwidth = 51;//��֤�뱳��ͼ�Ŀ�,����Ӧ�޸�
$img = imagecreatetruecolor($intwidth, $intheight);
$fontcolor = imagecolorallocate($img, 255, 0, 0);
$backcolor = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 0, 0, $backcolor);
//����
//imageline($img, mt_rand(0,$intwidth/3), mt_rand(0,$intheight/3), mt_rand($intwidth/3,$intwidth), mt_rand($intheight/3,$intheight), $fontcolor);
//imageline($img, mt_rand($intwidth/3, $intwidth), mt_rand(0, $intheight/3), mt_rand(0, $intwidth/3), mt_rand(0, $intheight/3), $fontcolor);
//���img��ߵ�������Ϣ
imagestring($img, 10, mt_rand(0, $intwidth - strlen($randval) * 10), mt_rand(0, $intheight-15), $randval, $fontcolor);
imagegif($img);
imagedestroy($img);
?>



