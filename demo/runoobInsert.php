<?php
	
	$dbhost = 'localhost:3306';
	
	$dbuser = 'root';
	
	$dbpass = '';
	
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass);
	
	if(!$conn){
		
		die('链接失败'.mysqli_error($conn));
		
	}
	
	echo '链接成功<br>';
	
	//设置编码，防止中文乱码
	mysqli_query($conn,"set names utf8");
	
	$runoob_title = '学习python';
	
	$runoob_author = 'RUNOOB.COM';
	
	$submission_date = '2018-07-13';
	
	$sql = "INSERT INTO  runoob_tb1".
	"(runoob_title,runoob_author,submission_date)".
	"VALUES".
	"('$runoob_title','$runoob_author','$submission_date')";
	
	mysqli_select_db($conn,'runoob');
	
	$retval = mysqli_query($conn,$sql);
	
	if(!$retval){
		
		die('无法插入数据;'.mysqli_error($conn));
	}
	
	echo "插入数据成功\n";
	
	mysqli_close($conn);
	
	
	
?>