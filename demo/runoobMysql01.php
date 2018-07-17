<?php
	
	$dbhost = 'localhost:3306';
	
	$dbuser = 'root';
	
	$dbpass = '';
	
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass);
	
	if(!$conn){
		die('链接失败：'.mysqli_error($conn));
	}
	
	echo '链接成功：<br>';
	
	$sql = "DROP TABLE runoob_tb1";
	
	mysqli_select_db($conn,'mydb');
	
	$retval = mysqli_query($conn,$sql);
	
	if(!$retval){
		die('数据表删除失败！'.mysqli_error($conn));
	}
	
	echo "数据表删除成功\n";
	
	mysqli_close($conn);
?>