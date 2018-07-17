<?php
	
	$dbhost = 'localhost:3306';
	
	$dbuser = 'root';
	
	$dbpass = '';
	
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass);
	
	if(!$conn){
		
		die('链接失败:'.mysqli_error($conn));
		
	}
	//设置字符编码
	mysqli_query($conn,'set names utf8');
	
	$sql = 'SELECT a.runoob_id,a.runoob_author,b.runoob_count from runoob_tb1 a inner join tcount_tb1 b on a.runoob_author = b.runoob_author';
	
	mysqli_select_db($conn,'runoob');
	
	$retval = mysqli_query($conn,$sql);
	
	if(!$retval){
		
		die('无法读取数据'.mysqli_error($conn));
		
	}
	
	echo "<h2>mysql join教程</h2>";
	
	echo "<table border='1'><tr><td>ID</td><td>作者</td><td>登录次数</td></tr>";
	
	while($row=mysqli_fetch_array($retval,MYSQL_ASSOC)){
		
		echo "<tr><td>{$row['runoob_id']}</td>".
			 "<td>{$row['runoob_author']}</td>".
			 "<td>{$row['runoob_count']}</td>".
			 "</tr>";
		
	}
	
	echo "</table>";
	
	mysqli_close($conn);
	
	
	
	
	
	
	
	
	
	
	
	

?>