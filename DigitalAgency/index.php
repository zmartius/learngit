<?php
require "smarty/init.inc.php";
$smarty->assign("title", "DigitalAgency");
$smarty->assign("copytime","2015");
$smarty->assign("h1title","We are a Creative Digital Agency");
$smarty->assign("contact","Contact");
$_SESSION["username"]="guest";
$_SESSION["uid"]=1;

// 上面两行也可以用这行代替
// $tpl->assign(array("title" => "测试用的网页标题", "content" => "测试用的网页内容"));

function insert_getPara($arr){
	return $arr["p1"];
}
$smarty->display("index.tpl");
?>