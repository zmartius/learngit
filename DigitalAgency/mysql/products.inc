<?php
	require('page.inc'); 
class home extends page
	{
		public function display()
		{
			$this->displaystyles();
			echo "<html>\n<head>\n";
			$this->displaytitle();
			$this->displaykeywords();
			
			echo "</head>\n<body>\n";
			$this->displayheader();
			
			echo $this->content{$this->productcontent()};
			$this->displayfooter();
			echo "</body>\n</html>\n";
		}
		public function displayproductstyles()
		{
		?>
       <style>
		body{margin:0;padding:0;width:100%;background-color:#f2f2f2;}
		img{border:none;}
		a{text-decoration:none;}
		#middleimg1{width:100%;height:auto;border:0;padding:0;margin-top:10px;position:relative;}
		#middleimg1 span{position:absolute;display:none; text-decoration:none;left:0;width:100%;bottom:0;}
		#middleimg1:hover span{display:block;color:#FFFFFF;z-index:10;height:46px;line-height:46px;text-align:center;background:#000;filter:alpha(opacity=60);-moz-opacity:0.5;opacity: 0.5;}
		#middle{width:200px;height::160px;margin:0;padding-left:100px;z-index:10;position:absolute;top:50%;}
		#middle p{font-size:60px; font-weight:900; line-height:5px;}
		#middle a{display:block;border:0;border-radius:24px;background-color:#EF2C1E;padding-left:16px;padding-top:10px;padding-right:6px;padding-bottom:8px;text-align:justify;font-size:16px; font-weight:500; vertical-align:middle;text-decoration:none;color:white;}
		#middle .middleddl{border-right:1px #999999 solid;padding-right:10px;margin-right:16px;}
		#middle a:hover{background-color:#5b5b5b;}
		#container{clear:both;margin:10px 80px;padding:2px; text-align:center;height:465px;width:80%;z-index:100;position: relative;top:20%;}
		#container div{position:relative;margin:0;padding:10px 20px;background-color:#ffffff;}
		#container li .img3{display:none;position:absolute;top:115px;left:30%;}
		#container li:hover .img3{display:block;z-index:10;}
		#container a{text-decoration:none;}
		#container li{float:left; list-style-type:none;margin:10px 20px;border:1px #e2e2e2 solid;}
		.img2{border-radius: 30em;}
		#product{display:block;margin:10px 80px;padding:10px;text-align:center;width:70%;height:600px;background-color:#ffffff;position:relative;top:20px;}
		.view{font-size:18px;margin-left:200px;}
		#product ul{padding:auto auto;margin:auto auto;}
		#product li{float:left;list-style-type:none;width:20.5%;margin:10px 10px;padding:5px;border:1px #e2e2e2 solid; border-radius:10px;}
		#product li:hover{border:1px #fe3026 solid;}
		#product a{text-decoration:none;color:#5b5b5b;}
		#product h4{display:inline;margin:0;}
		#product h4 a:hover{color:#FE3026;}
		#product li a.getnow{display:block;border-radius:30px;margin:8px auto;padding-top:8px;padding-bottom:0;background-color:#fe3026;width:170px;height:26px;text-align:center;color:#e2e2e2;}
		#product li a.getnow:hover{background-color:#5b5b5b;color:#ffffff;}
		#product .img4{width:80%;height:auto; }
		#product .price{border-right:1px solid #888888;padding-right:2px;margin-right:2px;}
			</style>
            <?php
		}
		public function productcontent()
		{
			$this->displayproductstyles();
	?>
    	<div id="middleimg1">
	<?php
		$pictures=array('Home_files/slide1.png','Home_files/slide2.png');
		shuffle($pictures);
		echo "<img class=\"middleimg\" src=\"";
		echo $pictures[0];
		echo "\"/>";
			?>
	<span>“ª’≈Õº∆¨</span>
		</div>
  <div id="middle">
		<p>WILL</p><p>HELM</p><p>WINTER</p>
		<a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/index.html"><strong><span 				class="middleddl">99.99$</span><span>GET NOW ></span></strong></a>
		</div>
  <div id="container">
	<ul>
		<li><div>
        		<H2>WOMAN</H2>
                <img class="img2" src="Home_files/img-w.jpg" />
                <img class="img3" src="Home_files/obj1.png" />
                <H2 style="color:#f2262c;">TOTAL</H2>
                <H4>357 PRODUCTS</H4>
                <a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html">				<img src="Home_files/list-icon.png" /></a>
                
                	</div></li>
		<li><div>
        		<H2>MAN</H2>
                <img class="img2" src="Home_files/man-r-img.jpg" />
                 <img class="img3" src="Home_files/obj2.png"	 />
                <H2 style="color:#f2262c;">TOTAL</H2>
                <H4>357 PRODUCTS</H4>
                <a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><img src="Home_files/list-icon.png" /></a>
               
                    </div></li>
         <li><div>
        		<H2>KIDS</H2>          							                    
        		<img class="img2" src="Home_files/kid-r-img.jpg" />
                <img class="img3" src="Home_files/obj3.png" />
                <H2 style="color:#f2262c;">TOTAL</H2>
                <H4>357 PRODUCTS</H4>
                <a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><img src="Home_files/list-icon.png" /></a>
                
                    </div></li>
                    	</ul>
		</div>
<div id="product">
    	<span style="font-size:30px;margin-left:10px;margin-right:15px;"><strong>SPECIAL</strong></span> <span style="font-size:30px;color:#f2262c;"><strong>PRODUCTS</strong></span>
        <em class="view"><img src="Home_files/arrow1.png" /><a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/products.html">view all products</a></em>
     <ul>
        <li>
            	<a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><img src="Home_files/b1.jpg" /></a><br />
                <a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><img class="img4" src="Home_files/p1.jpg" /></a><br />
          		<h4><a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html">Nike Roshe Run</a></h4>
          		<a class="getnow" href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><strong><span class="price">109.90$</span><span>GET NOW></span></strong></a></li>
        <li>
            	<a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><img src="Home_files/b2.jpg" /></a><br />
                <a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><img class="img4" src="Home_files/p2.jpg" /></a><br />
                <h4><a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html">Line Link 67009</a></h4>
                <a class="getnow" href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><strong><span class="price">109.90$</span><span>GET NOW></span></strong></a></li>
        <li>
            	<a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><img src="Home_files/b3.jpg" /></a><br />
                <a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><img class="img4" src="Home_files/p3.jpg" /></a><br />
                <h4><a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html">Athletic Shoe</a></h4>
                <a class="getnow" href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><strong><span class="price">109.90$</span><span>GET NOW></span></strong></a></li>
        <li>
            	<a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><img src="Home_files/b4.jpg" /></a><br />
                <a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><img class="img4" src="Home_files/p4.jpg" /></a><br />
                <h4><a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html">Athletic Shoe</a></h4>
                <a class="getnow" href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><strong><span class="price">109.90$</span><span>GET NOW></span></strong></a></li>       
       <li>
            	<a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><img src="Home_files/b5.jpg" /></a><br />
                <a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><img class="img4" src="Home_files/p2.jpg" /></a><br />
                <h4><a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html">Veronique</a></h4>
                <a class="getnow" href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><strong><span class="price">109.90$</span><span>GET NOW></span></strong></a></li>
       <li>
            	<a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><img src="Home_files/b6.jpg" /></a><br />
                <a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><img class="img4" src="Home_files/p6.jpg" /></a><br />
                <h4><a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html">Suede Boots</a></h4>
                <a class="getnow" href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><strong><span class="price">109.90$</span><span>GET NOW></span></strong></a></li>
       <li>
            	<a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><img src="Home_files/b7.jpg" /></a><br />
                <a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><img class="img4" src="Home_files/p7.jpg" /></a><br />
                <h4><a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html">Barricade 6.0</a></h4>
                <a class="getnow" href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><strong><span class="price">109.90$</span><span>GET NOW></span></strong></a></li>
       <li>
            	<a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><img src="Home_files/b1.jpg" /></a><br />
                <a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><img class="img4" src="Home_files/p8.jpg" /></a><br />
                <h4><a href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html">Cotu Classic</a></h4>
                <a class="getnow" href="http://demo.cssmoban.com/cssthemes2/ftmp8_52_hb/single-page.html"><strong><span class="price">109.90$</span><span>GET NOW></span></strong></a></li>
       
                </ul>         
    </div>
    <?php
		}
	
	}
	?>