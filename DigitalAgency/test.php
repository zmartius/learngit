<?php
require "main.php";
$tpl->assign("title", "�����õ���ҳ����");
$tpl->assign("content", "�����õ���ҳ����");
$hello[name]="Mr.Green";
$hello[time]="morning";
$tpl->assign("exp",$hello);
// ��������Ҳ���������д���
// $tpl->assign(array("title" => "�����õ���ҳ����", "content" => "�����õ���ҳ����"));
$tpl->display("test.html");
?>