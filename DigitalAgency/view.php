<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
	$con = mysql_connect("localhost","root","root");
	mysql_select_db("digitalagency", $con);
	$result = mysql_query("SELECT * FROM contact");
	echo "<table border='1'>";  
	echo "<tr><td>name</td><td>Email</td><td>subject</td><td>message</td></tr>"; 
	while($row = mysql_fetch_array($result)) echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>"; 
	echo "</table>"; 
mysql_close($con);                    
?> 
</body>
</html>