<?php
require "main.php";
$tpl->assign("title", "DigitalAgency");
$tpl->assign("copytime","2015");
$tpl->assign("h1title","We are a Creative Digital Agency");

// 上面两行也可以用这行代替
// $tpl->assign(array("title" => "测试用的网页标题", "content" => "测试用的网页内容"));
$tpl->display("index.tpl");
?>