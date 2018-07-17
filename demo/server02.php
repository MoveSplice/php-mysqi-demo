
<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<body>

<form action="server02.php" method="get">

firstname: <input type="text" name="fname">

lastname: <input type="text" name="age">

email: <input type="email" name="email">

<input type="submit" value="提交">
</form>

<?php

	var_dump($_GET);
	
	if($_GET){
		echo '11';
		
		$servername = "localhost";
	
		$username = "root";
		
		$password = "";
		
		$dbname = "mydb";
		
		
		//创建链接
		$conn = new mysqli($servername,$username,$password,$dbname);
		
		//var_dump($conn);
		
		//检测链接
		if($conn -> connect_error){
			
			die("链接失败:" . $conn -> connect_error);
			
		}

		
		$sql = "INSERT INTO myguests (firstname,lastname,email) VALUES('{$_GET['fname']}','{$_GET['age']}','{$_GET['email']}')";
		
		var_dump($sql);
		if($conn -> query($sql)===true){
			
			echo "新纪录插入成功";
		}else{
			
			echo "<br>ERROR:" .$sql . "<br>" .$conn -> error;
		}
		
		$conn -> close();
	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>

</body>
</html>