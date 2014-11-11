<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>数据</title>
</head>

<body>
<h1>顾客留言</h1>
<?php
	$nameterm	=$_POST['nameterm'];
	$emailterm	=$_POST['emailterm'];
	$subjectterm=$_POST['subjectterm'];
	$messageterm=$_POST['messageterm'];
	
	if(!$nameterm||!$emailterm||!$subjectterm||!$messageterm){
		echo '你还没有输入数据.<br>'
			.'请再试一次.';
			exit;
	}
	
	if(!get_magic_quotes_gpc()){
		$nameterm	=addslashes($nameterm);
		$emailterm	=addslashes($emailterm);
		$subjectterm=addslashes($subjectterm);
		$messageterm=addslashes($messageterm);
	}
	
	$db=new MySQLi('localhost',	'root','root','digitalagency');
	
	if(mysqli_connect_errno()){
		echo "错误：不能连接数据库。";
		exit;
	}
	$query="insert into contact values('".$nameterm."','".$emailterm."','".$subjectterm."','".$messageterm."')";
	/*$result=$db->query($query);*/
	$stmt=$db->query($query);
	/*$stmt->execute();*/
	if($stmt){
		echo $db->affected_rows."数据已输入。";
	}else{
		echo "一个错误，没有添加数据。";
	}
	$db->close();
	?>
</body>
</html>