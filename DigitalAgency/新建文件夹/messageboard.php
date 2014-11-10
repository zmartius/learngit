<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>massageboard</title>
</head>

<body>
<h1>网友评论</h1>
<?php
	$boardtitle		=$_POST['boardtitle'];
	$emailboard		=$_POST['emailboard'];
	$contentboard	=$_POST['contentboard'];

	
	if(!$boardtitle||!$emailboard||!$contentboard){
		echo '你还没有输入数据.<br>'
			.'请再试一次.';
			exit;
	}
	
	if(!get_magic_quotes_gpc()){
		$boardtitle		=addslashes($boardtitle);
		$emailboard		=addslashes($emailboard);
		$contentboard	=addslashes($contentboard);
	
	}
	
	$db=new MySQLi('localhost','root','root','brandlogo');
	
	if(mysqli_connect_errno()){
		echo "错误：不能连接数据库。";
		exit;
	}
	$query="insert into massageboard values('".$boardtitle."','".$emailboard."','".$contentboard."')";
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