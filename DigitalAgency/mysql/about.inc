<?php
	require('page.inc');
	class about extends page{
		public function display()
		{
			$this->displaystyles();
			echo "<html>\n<head>\n";
			$this->displaytitle();
			$this->displaykeywords();
			
			echo "</head>\n<body>\n";
			$this->displayheader();
			
			echo $this->contentabout{$this->contentabout()};
			$this->displayfooter();
			echo "</body>\n</html>\n";
				}
		public function contentaboutstyles()
		{
		?>
        	<style>
	#aboutmessageboard{display:inline-block;width:200px;hight:280px;background-color: 
	#6CF;color:#333;padding:15px;margin:20px}
	#aboutmessageboard label{vertical-align:top;}
	#aboutmessageboard h2{font-weight:600;padding:0;margin-left:40px;}
	#aboutmessageboard input{border:1px solid #C90;background-color:#C96;padding:0;margin:0}
	#aboutmessageboard .fabu{pading:1px;margin:0}
	#aboutmessageboard textarea{padding:0;margin:0;background-color:#9FC;border:1px solid #666;}
	#filter{display:block;width:300px;hight:280px;float:left;padding:0px 5px 20px 30px;margin:20px;background-color:#6FF;color:#5C4344;}
	#filter p{font-size:36px;}
	#filter ul{width:120px;hight:220px;float:left;padding:5px;margin:2px;font-size:18px;font-weight:600;}
	#filter li{display:block;}
	#filter li{list-style-type:none;width:120px;hight:20px;}
	#filter ul.brandsleft li{text-align:right;text-decoration:none;border-right:1px solid #cecece;padding-right:8px;}
	#filter ul.brandsright li{text-align:left; text-decoration:none;}
	#selectcolor{display:inline-block;width:300px;hight:200px;margin:20px 20px auto 0;padding:10px;float:left;background-color:#CFF;}
	#selectcolor h3{color: #2A2929;font-weight:700;padding:0;margin-left:50px;}
	#selectcolor ul{ list-style-type:none;}
	#selectcolor li{float:left;margin:5px;}
	#selectcolor a{display:inline-block;width:20px;height:20px;padding:0;margin:0}
	#selectcolor span{padding:0;margin:0;}
	#selectcolor a.color1{background-color:#ed4c51;}
	#selectcolor .color2{background-color:#FAB379;}
	.color3{background-color:#79B9FA;}
	.color4{background-color:#E2EA95;}
	.color5{background-color:#803B3E;}
	.color6{background-color:#93498C;}
	.color7{background-color:#485B70;}
	.color8{background-color:#74925F;}
	.color9{background-color:#904CED;}
	.color10{background-color:#70635A;}
	.color11{background-color:#373737;}
	.color12{background-color:#47883B;}
	.color13{background-color:#B381B2;}
	.color14{background-color:#386E90;}
	.color15{background-color:#CBBDBD;}
	.color16{background-color:#F87941;}
	.color17{background-color:#D0E23F;}
	.color18{background-color:#5F8F92;}
	.color19{background-color:#CAA294;}
	</style>
    	<?php
		}
		public function contentabout()
		{
			$this->contentaboutstyles();
		?>
        <div id="filter">
        <p><strong>BRANDS</strong></p>
        <ul class="brandsleft">
        	<li>adidas</li><li>nike</li><li>camper</li><li>superga</li><li>timberlan</li>
            <li>new balance</li><li>converse</li><li>puma</li><li>kinetix</li>
            </ul>
        <ul class="brandsright">
        <li>tiger</li><li>lacoste</li><li>eebok</li><li>cat</li><li>dockers</li>
            	</ul>
                </div>
        <div id="selectcolor">
        <h3>SELECT COLOR</h3><ul>
			<li><a href="#" class="color1"><span></span></a></li>
            <li><a href="#" class="color2"><span></span></a></li>
            <li><a href="#" class="color3"><span></span></a></li>
            <li><a href="#" class="color4"><span></span></a></li>
            <li><a href="#" class="color5"><span></span></a></li>
            <li><a href="#" class="color6"><span></span></a></li>
            <li><a href="#" class="color7"><span></span></a></li>
            <li><a href="#" class="color8"><span></span></a></li>
            <li><a href="#" class="color9"><span></span></a></li>
            <li><a href="#" class="color10"><span></span></a></li>
            <li><a href="#" class="color11"><span></span></a></li>
            <li><a href="#" class="color12"><span></span></a></li>
            <li><a href="#" class="color13"><span></span></a></li>
            <li><a href="#" class="color14"><span></span></a></li>
            <li><a href="#" class="color15"><span></span></a></li>
            <li><a href="#" class="color16"><span></span></a></li>
            <li><a href="#" class="color17"><span></span></a></li>
            <li><a href="#" class="color18"><span></span></a></li>
            <li><a href="#" class="color19"><span></span></a></li>
            		</ul>
            </div>
        <div id="aboutmessageboard">
		<h2>网友评论</h2>
<form action="messageboard.php" method="post">
	<h3><label for="boardtitle1">标题</label>
    <input type="text" name="boardtitle" maxlength="22" size="16" id="boardtitle1"></h3>
    <h3><label for="emailboard1">Email</label>
    <input type="email" name="emailboard" size="14" id="emailboard1" /></h3>
    <h3><label for="contentboard1">评论内容</label>
    <textarea name="contentboard" id="contentboard1" rows="8"></textarea></h3>
    <input type="submit" value="发布" class="fabu">
	</form>
    	</div>
    <?php
		}
	}