<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�������</title>
</head>
<h1>�������</h1>
<?php
	$searchterm=trim($_POST['searchterm']);
	$searchtype=trim($_POST['searchtype']);
	if(!$searchterm){
		echo '��û��������������,������';
		exit;
	}
	
	if(!get_magic_quotes_gpc()){
		$searchterm=addlashes($searchterm);
		$searchtype=addlashes($searchtype);
	}
	
	$db=new MySQLi('localhost','root','root','BRANDLOGO');
	
	if(mysqli_connect_errno()){
		echo '�����������ݿ�,������';
		exit;
	}
	
	$query="select * from BRANDLOGO where ".$searchtype." like '%".$searchterm."%'";
	$result=$db->query($query);
	$num_results=$result->num_rows;
	
	echo "<p>��������:".$num_results."</p>";
	
	for($i=0;$i<$num_results;$i++){
		$row=$result->fetch_assoc();
		echo "<p><strong>".($i++).".shoes:";
		echo htmlspecialchars(stripslashes($row['shoes']));
		echo "</strong><br>gender:";
		echo stripslashes($row['gender']);
		echo "<br>place:";
		echo stripslashes($row['place']);
		echo "<br>price:";
		echo stripslashes($row['price']);
		echo "</p>";
	}
	$result->free();
	$db->close();
	?>
<body>
</body>
</html>