
<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<body>

<form action="server06.php" method="get">

	firstname: <input type="text" name="fname">

	lastname: <input type="text" name="age">

	email: <input type="email" name="email">

	alexa:<input type="text" name="alexa">

	country:<input type="text" name="country">

<input type="submit" value="提交">
</form>
	<?php
	
	
		$servername = "localhost";
			
		$username = "root";
			
		$password = "";
			
		$dbname = "mydb";
		
		
		//创建链接
		
		$conn = new mysqli($servername,$username,$password,$dbname);
		
		//检测链接
		if($conn -> connect_error){
			
			die("链接失败:" . $conn ->connect_error);
		}
	
		//使用sql创建数据表
		$sql = "CREATE TABLE WebSites(
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(30) NOT NULL,
		url VARCHAR(30) NOT NULL,
		alexa INT(6) NOT NULL,
		country VARCHAR(30) NOT NULL
		)";
	
		if ($conn->query($sql) === TRUE) {
			echo "Table MyGuests created successfully";
		} else {
			echo "创建数据表错误: " . $conn->error;
		}

		$conn->close();
		
		
	?>



</body>
</html>