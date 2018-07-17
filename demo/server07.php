
<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<body>

<form action="server07.php" method="post">

	name: <input type="text" name="fname">


	url: <input type="text" name="url">

	alexa:<input type="text" name="alexa">

	country:<input type="text" name="country">

<input type="submit" value="提交">
</form>
	<?php
	
		if($_POST){
			
			$servername = "localhost";
	
			$username = "root";
			
			$password = "";
			
			$dbname = "mydb";
			
			//创建链接
			$conn = new mysqli($servername,$username,$password,$dbname);
			
			//检测链接
			if($conn -> connect_error){
				
				die("链接失败:" . $conn -> connect_error);
			}
			
			$sql = "INSERT INTO websites (name,url,alexa,country) VALUES('{$_POST['fname']}','{$_POST['url']}','{$_POST['alexa']}','{$_POST['country']}')";
			
			
			if($conn -> query($sql)==true){
				
				echo "插入记录成功";
				
			}else{
				echo "<br>ERROR:" .$sql . "<br>" .$conn -> error;
			}
			
			$conn -> close();
			
		}
		
	?>



</body>
</html>