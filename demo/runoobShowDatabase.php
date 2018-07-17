<?php
	

	$dbhost = 'localhost:3306';
	
	$dbuser = 'root';
	
	$dbpass = '';
	
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass);
	
	if(!$conn){
		
		die('链接失败'.mysqli_error($conn));
		
	}
	
	//设置字符编码
	$db_list = mysqli_query($conn,'show databases');
	
	echo "<table border='1'><tr><td>数据表名称</td></tr>";
	
	while($db = mysqli_fetch_object($db_list)){
		
		echo "<tr><td>".$db ->Database ."</td></tr>";
		
		
	}
	
	echo "</table>";
	
	mysqli_close($conn);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>