<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<body>

<form action="welcome1.php" method="get">
名字: <input type="text" name="name">
年龄: <input type="text" name="age">
<input type="submit">
</form>


	<?php
	
			if($_GET['name']!=null && $_GET['age']!=null){
				
					echo "欢迎";
			
					echo $_GET['name'] . "<br>";
					
					echo "你";
					
					echo $_GET['age'] . "岁了";
				
			}

	?>
</body>
</html>