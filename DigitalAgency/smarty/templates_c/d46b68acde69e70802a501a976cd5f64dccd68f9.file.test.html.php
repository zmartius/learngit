<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-11 10:04:03
         compiled from ".\smarty\templates\test.html" */ ?>
<?php /*%%SmartyHeaderCode:2761254602b838e9736-03169997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd46b68acde69e70802a501a976cd5f64dccd68f9' => 
    array (
      0 => '.\\smarty\\templates\\test.html',
      1 => 1415671330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2761254602b838e9736-03169997',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54602b83954eb0_68266619',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
    'exp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54602b83954eb0_68266619')) {function content_54602b83954eb0_68266619($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body>
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

hello,<?php echo $_smarty_tpl->tpl_vars['exp']->value['name'];?>
!good<?php echo $_smarty_tpl->tpl_vars['exp']->value['time'];?>

</body>
</html>
<?php }} ?>
