<?php
require "main.php";
$tpl->assign("title", "DigitalAgency");
$tpl->assign("copytime","2015");
$tpl->assign("h1title","We are a Creative Digital Agency");

// ��������Ҳ���������д���
// $tpl->assign(array("title" => "�����õ���ҳ����", "content" => "�����õ���ҳ����"));
$tpl->display("index.tpl");
?>