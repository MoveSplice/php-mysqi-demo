<?php

	header('Content-Type:text/html;charset=utf-8');
	
	$dbhost = 'localhost:3306';
	
	$dbuser = 'root';
	
	$dbpass = '';
	
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass);
	
	if(!$conn){
		
		die('链接失败:'.mysqli_error($conn));
		
	}
	
	//设置字符编码
	mysqli_query($conn,'set names utf8');
	
	$sql = 'SELECT runoob_id,runoob_title,runoob_author,submission_date FROM runoob_tb1 ORDER BY submission_date ASC';
	
	mysqli_select_db($conn,'runoob');
	
	$retval = mysqli_query($conn,$sql);
	
	if(!$retval){
		
		die('读取数据失败;'.mysqli_error($conn));
		
	}
	echo "<table border='1'><tr><td>教程ID</td><td>标题</td><td>作者</td><td>提交时间</td></tr>";
	
	while($row=mysqli_fetch_array($retval,MYSQLI_ASSOC)){
		
		echo "<tr><td>{$row['runoob_id']}</td>".
			 "<td>{$row['runoob_title']}</td>".
			 "<td>{$row['runoob_author']}</td>".
			 "<td>{$row['submission_date']}</td>".
			 "</tr>";
		

	}
	
	echo "</table>";
	
	mysqli_close($conn);
	
	
	
	
	
	
	
	
	
	
	
?>