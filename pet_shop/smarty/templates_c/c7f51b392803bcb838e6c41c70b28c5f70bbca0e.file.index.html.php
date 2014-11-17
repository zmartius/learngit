<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-17 15:11:31
         compiled from "E:\site\pet_shop\smarty\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:12967546989191589f8-86180946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7f51b392803bcb838e6c41c70b28c5f70bbca0e' => 
    array (
      0 => 'E:\\site\\pet_shop\\smarty\\templates\\index.html',
      1 => 1416208284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12967546989191589f8-86180946',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546989191cc208_45385839',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546989191cc208_45385839')) {function content_546989191cc208_45385839($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="images/bullet2.gif" />
<link rel="shortcut icon" type="image/x-icon" href="images/bullet2.gif" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrap">
<div id="header">
    	<div class="logo"><a href="#"><img src="images/logo.gif" alt="#" title="#" /></a></div>
        <div id="menu">
        	<ul>
   				<li><a href="#">home</a></li>
   				<li><a href="#">about us</a></li>
    			<li><a href="#">pets</a></li>
    			<li><a href="#">specials pets</a></li>
    			<li><a href="#">my accout</a></li>
    			<li><a href="#">register</a></li>
    			<li><a href="#">prices</a></li>
    			<li><a href="#">contact</a></li>
                	</ul>
         </div>
    </div>
  <div id="container">
<?php echo $_smarty_tpl->getSubTemplate ("leftcontent.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("rightcontent.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
</div>
<div class="footer">
	<p class="copyright"><a href="#">petshop.com</a></p>
	<ul>
    	<li><a href="#">home</a></li>
        <li><a href="#">about us</a></li>
        <li><a href="#">services</a></li>
        <li><a href="#">privacy</a></li>
        <li><a href="#">policy</a></li>
        <li><a href="#">contact us</a></li>
        </ul>
</div>
</div>
</body>
</html><?php }} ?>
