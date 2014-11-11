<?php
require "main.php";
$tpl->assign("title", "测试用的网页标题");
$tpl->assign("content", "测试用的网页内容");
$hello[name]="Mr.Green";
$hello[time]="morning";
$tpl->assign("exp",$hello);
// 上面两行也可以用这行代替
// $tpl->assign(array("title" => "测试用的网页标题", "content" => "测试用的网页内容"));
$tpl->display("test.html");
?>