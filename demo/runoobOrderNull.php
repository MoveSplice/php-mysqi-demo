<?php
	
	$dbhost = 'localhost:3306';
	
	$dbuser = 'root';
	
	$dbpass = '';
	
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass);
	
	if(!$conn){
		
		die('链接数据库失败'.mysqli_error($conn));
		
	}
	
	//设置字符编码
	mysqli_query($conn,'set names utf8');
	
	if(isset($runoob_count)){
		
		$sql = 'select runoob_author,runoob_count from runoob_test_tb1 where runoob_count=$runoob_count';
		
	}else{
		
		$sql = 'select runoob_author,runoob_count from runoob_test_tb1 where runoob_count is not null';
	}
	
	mysqli_select_db($conn,'runoob');
	
	$retval = mysqli_query($conn,$sql);
	
	if(!$retval){
		
		die('读取数据失败'.mysqli_error($conn));
		
	}
	
	echo "<h2>is null 测试</h2>";
	
	
	echo "<table border='1'><tr><td>作者</td><td>登录次数</td></tr>";
	
	while($row=mysqli_fetch_array($retval,MYSQL_ASSOC)){
		
		echo "<tr><td>{$row['runoob_author']}</td>".
			 "<td>{$row['runoob_count']}</td>".
			 "</tr>";
		
	}
	
	echo "</table>";
	
	mysqli_close($conn);
	
	
	
	
	
	
	
	
	
	
	
	
	 
	 
	
	
	
	
	
	
	
	
	
	
	
	
?>