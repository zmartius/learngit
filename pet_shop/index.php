<?php
require "smarty/init.inc.php";
$smarty->assign("title", "Pet Shop");
/*$_SESSION["username"]="guest";
$_SESSION["uid"]=1;*/

// 上面两行也可以用这行代替
// $smarty->assign(array("title" => "测试用的网页标题", "content" => "测试用的网页内容"));

/*function insert_getPara($arr){
	return $arr["p1"];
}*/
$smarty->display("index.html");
?>