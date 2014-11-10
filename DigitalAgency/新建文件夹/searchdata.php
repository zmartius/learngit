<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>数据</title>
</head>

<body>
<h1>产品数据库</h1>
<?php
	$shoes	=$_POST['shoes'];
	$gender	=$_POST['gender'];
	$price	=$_POST['price'];
	$place	=$_POST['place'];
	
	if(!$shoes||!$gender||!$price||!$place){
		echo '你还没有输入数据.<br>'
			.'请再试一次.';
			exit;
	}
	
	if(!get_magic_quotes_gpc()){
		$shoes	=addslashes($shoes);
		$gender	=addslashes($gender);
		$place	=addslashes($place);
		$price	=doubleval($price);
	}
	
	$db=new MySQLi('localhost',	'root','root','BRANDLOGO');
	
	if(mysqli_connect_errno()){
		echo "错误：不能连接数据库。";
		exit;
	}
	$query="insert into BRANDLOGO values('".$shoes."','".$gender."','".$place."',
	'".$price."')";
	$result=$db->query($query);
	if($result){
		echo $db->affected_rows."数据已输入。";
	}else{
		echo "一个错误，没有添加数据。";
	}
	$db->close();
	?>
</body>
</html>