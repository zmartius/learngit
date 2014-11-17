<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-14 22:08:18
         compiled from "D:\wwwroot\DigitalAgency\smarty\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210455463484c37c155-23264382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81d2c9f95b131053270c28b67fa694bc316a881e' => 
    array (
      0 => 'D:\\wwwroot\\DigitalAgency\\smarty\\templates\\header.tpl',
      1 => 1415970912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210455463484c37c155-23264382',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5463484c388b84_49109549',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5463484c388b84_49109549')) {function content_5463484c388b84_49109549($_smarty_tpl) {?><?php if (!is_callable('smarty_function_datenow')) include 'D:/wwwroot/DigitalAgency/smarty/plugins\\function.datenow.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="Home_files/fav-icon.png" />
<link rel="shortcut icon" type="image/x-icon" href="Home_files/fav-icon.png" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link href="digitalagency.css" rel="stylesheet" type="text/css" />
</head>
<body>
<p><?php echo smarty_function_datenow(array(),$_smarty_tpl);?>
您好:<?php echo $_SESSION['username'];?>
,个人中心</p><?php }} ?>
