<?php
	
	$servername = "localhost";
	
	$username = "root";
	
	$password = "";
	
	//创建链接
	
	$conn = new mysqli("{$servername}","${username}","{$password}");
	
	//检测链接
	
	if($conn -> connect_error){
		
		die("链接失败:" .$conn ->connect_error);
		
	}
	
	//创建数据库
	
	$sql = "CREATE DATABASE myDBsd";
	
	if($conn -> query($sql)===TRUE){
		
		echo "数据库创建成功";
		
	}else{
		
		echo "Error createing database:" .$conn -> error;
	}
	
	$conn -> close();
	
?>