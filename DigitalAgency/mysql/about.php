<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ABOUT</title>
<style>
	#aboutmessageboard{display:inline-block;width:200px;hight:280px;background-color:#91989d;color:#333;}
	#aboutmessageboard label{vertical-align:top;}
	#aboutmessageboard h2{font-weight:600;padding:0;margin-left:40px;}
	#aboutmessageboard input{border:1px solid #C90;background-color:#C96;padding:0;margin:0}
	#aboutmessageboard .fabu{pading:1px;margin:0}
	</style>
</head>

<body>
<div id="aboutmessageboard">
<h2>网友评论</h2>
<form action="messageboard.php" method="post">
	<h3><label for="boardtitle1">标题</label>
    <input type="text" name="boardtitle" size="16" id="boardtitle1"></h3>
    <h3><label for="emailboard1">Email</label>
    <input type="email" name="emailboard" size="14" id="emailboard1" /></h3>
    <h3><label for="contentboard1">评论内容</label>
    <textarea name="contentboard" id="contentboard1" rows="6"></textarea></h3>
    <input type="submit" value="发布" class="fabu">
	</form>
	</div>
</body>
</html>