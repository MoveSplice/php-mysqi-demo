<?php

	header("Content-type:text/html;charset=utf-8");//字符编码设置  
	
	header('Access-Control-Allow-Origin:*');

	$dbhost = 'localhost:3306';
	
	$dbuser = 'root';
	
	$dbpass = '';
	
	$dbname = 'runoob';
	
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
	if(!$conn){
		
		die('链接失败'.mysqli_error($conn));
		
	}
	
	$sql = 'select * from websites';
	
	$result = mysqli_query($conn,$sql);
	
	if(!$result){
		
		printf('Error:%s\n',mysqli_error($conn));
		
		exit();
		
	}
	
	$jarr = array();
	
	while($rows = mysqli_fetch_array($result,MYSQL_ASSOC)){
		
		$count = count($rows);
		
		for($i=0;$i<$count;$i++){
			
			unset($rows[$i]);
			
		}
		
		array_push($jarr,$rows);
		
	}
	
	$jobj = new stdclass();
	
	foreach($jarr as $key=>$value){
		
		$jobj->$key=$value;
		
	}
	
	echo json_encode($jobj);//打印编码后的json字符串
	
	mysqli_close($conn);

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>