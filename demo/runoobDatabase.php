<?php

	//创建数据库
	$dbhost = 'localhost:3306';
	
	$dbuser = 'root';
	
	$dbpass = '';
	
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass);
	
	if(!$conn){
		die('链接失败:'.mysqli_error($conn));
	}
	
	echo '链接成功<br>';
	
	$sql = 'CREATE DATEBASE RUNOOB';
	
	$retval = mysqli_query($conn,$sql);
	
	if(!$retval){
		die('创建数据库失败:'.mysqli_error($conn));
	}
	
	echo '创建数据库成功\n';
	
	mysqli_close($conn);
?>