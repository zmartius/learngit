<?php
require "smarty/init.inc.php";
$smarty->assign("title", "Pet Shop");
/*$_SESSION["username"]="guest";
$_SESSION["uid"]=1;*/

// ��������Ҳ���������д���
// $smarty->assign(array("title" => "�����õ���ҳ����", "content" => "�����õ���ҳ����"));

/*function insert_getPara($arr){
	return $arr["p1"];
}*/
$smarty->display("index.html");
?>