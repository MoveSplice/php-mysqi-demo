<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
   
</head>
<body>


<form action="email.php" method="post" enctype="multipart/form-data">
    邮箱：<input  type="text" id="mail" name="mail"/>
    标题：<input  type="text" id="title" name="title"/>
    内容<input  type="text" id="content" name="content"/>
    <input class="button" type="submit" name="submit" value="发送" style="margin: 0 auto;display: block;"/>
</form>
<?php
	
	header("Content-type:text/html;charset=utf-8");
	
	
	
?>


</body>
</html>