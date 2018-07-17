<?php

	$dbhost = "localhost:3306";
	
	$dbuser = "root";
	
	$dbpass = "";
	
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass);
	
	if(!$conn){
		
		die('链接数据库失败'.mysqli_error($conn));
		
	}
	
	//设置字符编码
	mysqli_query($conn,'set names utf8');
	
	//查询相应数据库的表
	mysqli_select_db($conn,'runoob');
	
	//设置不是自动提交,因为mysql默认立即执行
	mysqli_query($conn,'set autocommit=0');
	
	//开始事务
	mysqli_begin_transcation($conn);
	
	if(!mysqli_query($conn,"insert into runoob_transaction_test(id) value(9)")){
		
		mysqli_query($conn,"ROLLBACK");
		
	}
	
	if(!mysqli_query($conn,"insert into runoob_transaction_test(id) value(10)")){
		
		mysqli_query($conn,"ROLLBACK");
		
	}
	
	//执行事务
	mysqli_commit($conn);
	
	//关闭资源
	mysqli_close($conn);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>