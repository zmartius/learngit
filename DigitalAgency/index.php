<?php
require "smarty/init.inc.php";
$tpl->assign("title", "DigitalAgency");
$tpl->assign("copytime","2015");
$tpl->assign("h1title","We are a Creative Digital Agency");
$tpl->assign("contact","<h2>Contact</h2>");


// ��������Ҳ���������д���
// $tpl->assign(array("title" => "�����õ���ҳ����", "content" => "�����õ���ҳ����"));

function insert_getPara($arr){
	return $arr["p1"];

}
$tpl->display("index.tpl");
?>