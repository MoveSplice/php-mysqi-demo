<?php
	
	$dbhost = 'localhost:3306';
	
	$dbuser = 'root';
	
	$dbpass = '';
	
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass);
	
	if(!$conn){
		
		die('链接失败'.mysqli_error($conn));
		
	}
	
	//设置字符编码
	mysqli_query($conn,"set names utf8");
	
	$sql = 'SELECT runoob_id,runoob_title,runoob_author,submission_date FROM runoob_tb1';
	
	mysqli_select_db($conn,'runoob');
	
	$retval = mysqli_query($conn,$sql);
	
	if(!$retval){
		
		die('无法读取数据'.mysqli_error($conn));
	}
	
	echo "<table border='1'><tr><td>教程ID</td><td>标题</td><td>作者</td><td>提交日期</td></tr>";
	
	while($row=mysqli_fetch_assoc($retval)){
		
		echo "<tr><td>{$row['runoob_id']}</td>".
			"<td>{$row['runoob_title']}</td>".
			"<td>{$row['runoob_author']}</td>".
			"<td>{$row['submission_date']}</td>".
			"</tr>";
	}
	
	echo '</table>';
	
	mysqli_close($conn);
?>