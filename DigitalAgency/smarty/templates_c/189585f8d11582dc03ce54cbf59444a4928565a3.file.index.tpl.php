<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-14 11:03:21
         compiled from "E:\site\DigitalAgency\smarty\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211525461735ea963e4-33041009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '189585f8d11582dc03ce54cbf59444a4928565a3' => 
    array (
      0 => 'E:\\site\\DigitalAgency\\smarty\\templates\\index.tpl',
      1 => 1415933964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211525461735ea963e4-33041009',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5461735eb66b40_57285855',
  'variables' => 
  array (
    'contact' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5461735eb66b40_57285855')) {function content_5461735eb66b40_57285855($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="container">
	<ul>
    <li><dl class="dla">
    	<dt>Responsive Design</dt>
        <dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</dd>
    		</dl></li>
    <li><dl class="dlb">
        <dt>Web Development</dt>
        <dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</dd>
    		</dl></li>
    <li><dl class="dlc">
		<dt>Internet Marketing</dt>
        <dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</dd>		
    		</dl></li>
    <li><dl class="dld">
        <dt>IOS Development</dt>
        <dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</dd>
    		</dl></li>
    		</ul>
    </div>
 <br />
<div id="about" class="displayinlb">
<img src="Home_files/divice.png" alt="device" class="device displayinlb"/>
<div class="rpd displayinlb">
<div class="rpdtop">
<h3>Responsive Design</h3>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
</p>
	</div>
<a href="#" class="readmore displayb">Read More</a>
	</div>
    </div>
<div id="portfolio" class="displayinlb">
   <div class="portfoliocont displayinlb">
        <h3>Portfolio</h3>
        <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</span>
      <p class="portfolionav displayinlb">
        <span><a href="#">All</a></span>
 		<span><a href="#">Branding</a></span>
		<span><a href="#">Illustraions</a></span>
		<span><a href="#">Web design</a></span>
			</p>
            </div>
  </div>
 
 <div id="portfoliolist">
 <ul>
 	<li><a href="#"><img src="Home_files/p1.jpg" class="imgl"/><img src="Home_files/link-ico.png" class="imgr"/></a></li>
    <li><a href="#"><img src="Home_files/p2.jpg" class="imgl"/><img src="Home_files/link-ico.png" class="imgr"/></a></li>
    <li><a href="#"><img src="Home_files/p3.jpg" class="imgl"/><img src="Home_files/link-ico.png" class="imgr"/></a></li>
    <li><a href="#"><img src="Home_files/p4.jpg" class="imgl"/><img src="Home_files/link-ico.png" class="imgr"/></a></li>
    <li><a href="#"><img src="Home_files/p5.png" class="imgl"/><img src="Home_files/link-ico.png" class="imgr"/></a></li>
    <li><a href="#"><img src="Home_files/p6.jpg" class="imgl"/><img src="Home_files/link-ico.png" class="imgr"/></a></li>
    <li><a href="#"><img src="Home_files/p7.jpg" class="imgl"/><img src="Home_files/link-ico.png" class="imgr"/></a></li>
    <li><a href="#"><img src="Home_files/p8.jpg" class="imgl"/><img src="Home_files/link-ico.png" class="imgr"/></a></li>
   	</ul>
 </div>
 
 <div class="carousel-inner">
 <img src="Home_files/people.jpg" class="name displayinlb" alt="myname" id="carouselname"  />
 <dl>
<dt>Dan Cederholm</dt>
<dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</dd>

 <dd class="pagenate">
 	<a href="Home_files/people.jpg" onclick="showPic(this);return false;" title="1"><span class="pagenatea"></span></a>
    <a href="Home_files/people.jpg" onclick="showPic(this);return false;" title="2"><span class="pagenateb"></span></a>
    <a href="Home_files/people.jpg" onclick="showPic(this);return false;" title="3"><span class="pagenatec"></span></a>
   </dd>
    </dl>
    <?php echo '<script'; ?>
 type="text/javascript" src="home.js"> <?php echo '</script'; ?>
>  
 </div>
 
 <div id="contact">
	 <h2><?php echo insert_getPara(array('p1' => ((string)$_smarty_tpl->tpl_vars['contact']->value)),$_smarty_tpl);?>
  </h2>
    <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
    <br />
    <form class="contactfm" method="post" action="mysql/contact.php">
    <ul>
    <li><input type="text" placeholder="Name" name="nameterm" maxlength="22"></input></li>
    <li><input type="text" placeholder="Email" name="emailterm" maxlength="22"></input></li>
    <li><input type="text" placeholder="Subject" name="subjectterm" maxlength="22"></input></li>
    	</ul>
    <textarea class="contactms displayinlb" rows="7" cols="30" placeholder="Message" name="messageterm" maxlength="500"></textarea>
    <br />
    <input class="contactsb displayinlb" type="submit" value="Submit Message" name="submit"></input>
    </form>
    </div>
    <br />
    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
