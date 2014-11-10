
<?php

	class page
	{
		private $content;
		public $title="BRAND LOGO";
		public $keywords="BRAND LOGO";
		public function __set($name,$value)
		{
			$this->$name=$value;
				}
		private function display()
		{
			$this->displaystyles();
			echo "<html>\n<head>\n";
			$this->displaytitle();
			$this->displaykeywords();
			
			echo "</head>\n<body>\n";
			$this->displayheader();
			echo $this->content;
			echo $this->contentabout;
			$this->displayfooter();
			echo "</body>\n</html>\n";
		}
		
		public function displaytitle()
		{
			echo "<title>".$this->title."</title>";
		}
		
		public function displaykeywords()
		{
			echo "<meta name=\"keywords\" content=\"".$this->keywords."\"/>";
		}
		
		public function displaystyles()
		{
		?>
        <style>
        body{margin:0;padding:0;width:100%;background-color:#f2f2f2;}
		img{border:none;}
		a{text-decoration:none;}
		.banner{margin:0;padding-top:20px;padding-left:120px;height:180px;width:89%; 		padding-right:10px;}
		.logo{display:block;width:360px;height:65px;}
		.logo img{width:320px;}
		.logo a{margin:0px;}
		.logo img:hover{width:330px;margin-top:-2px;margin-left:-2px;}
		.topheaderinfo{ position:absolute;top:20px;left:600px;padding:1px;display:block;border:none;width:280px;height:120px;font:18px bolder;}
		.topheaderinfo img{ vertical-align:middle;margin-right:2px;margin-left:2px;width:6%;		}
		.topheaderinfo a{color:black; text-decoration:none;}
		.LOGINREGISTER{border:2px white solid; border-radius:6px;padding:4px 0;margin:2px 0 0 0;}
		.cart{margin:0;padding:4px 4px 4px 0;border-right:#ddd9d9 solid 2px;}
		.login{font:20px bolder;padding:2px 4px 2px 4px;margin:0;}
		.login a{text-decoration:underline;color:#5b5b5b;}
		.login a:hover{ text-decoration:none;color:#ef3626;}
		.register{background-color:#ee3023;padding:2px 6px;border:1px thick solid black;border-radius:3px;font:20px bolder white;vertical-align:middle;margin-left:24px;}
		.register a{text-decoration:none;color:#ffffff;}
		.register:hover{background-color: #f7f7f7;background-color:#5b5b5b;}
		.nav{background-color:#f7f7f7;border:1px solid #dbdbdb;margin-left:150px;margin-top:-50px;padding:0;width:700px;height:66px; }
		.nav ul{text-align:center;padding:0;margin:0px;}
		.nav li{float:left; list-style-type:none;height:40px;padding:2px;}
		.nav li h4{margin:12px 0;font-weight:800;}
		.nav ul a{text-decoration:none;color:black;display:block;padding:10px 3px;border-right:1px solid #dbdbdb;}
		.nav ul a:hover{color:#ee3023;}
		.nav .topsearch{display:block;padding:0;float:right;margin:0;position:relative;top:24px;}
		.nav input{border:1px #dbdbdb solid;border-radius:20px;}
		.nav .topsearchpic{border-right:0;border-top-right-radius:0;border-bottom-right-radius:0;margin-right:-10px;}
		.nav .topsearchtpt{border-top-left-radius:0;border-bottom-left-radius:0;border-left:none;}
		.nav input:hover{border-color:#ee3023;}

		#footer{position:relative;height:100px;width:91.1%;background-color:#f2262c;font-size:1em;font-weight:600;top:20px;padding:10px 60px;}
		#footer a{color:#ffffff;}
		#footer a.img5{float:left;margin:36px 40px;padding:0;}
		#footer dl{float:left;margin:40px 10px;}
		#footer dt{float:left;display:inline;border-right:1px solid #ffffff;padding-right:6px;padding-left:2px;margin:auto 3px auto 1px;}
		#footer img.img6{margin:36px 60px;padding:0;}
		#copyright{position:relative;background-color:#444444;text-align:center;margin:0;padding:1px;width:99.8%;height:60px;}
		#copyright p{vertical-align:middle;font-size:18px;color:#ffffff;}
		#copyright a{color:#ffffff;}
			</style>
		<?php
		}
		public function displayheader()
		{
			
			require('header.php');
		}
		public function isurlcurrentpage($url)
		{
			if(strpos($_SERVER['PHP_SELF'],$url)==false){
				return false;
			}
			else{
				return true;
			}
		}
	
		public function displayfooter()
		{
			require('footer.php');
		}
	}
	?>