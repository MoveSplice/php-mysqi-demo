<?php
	session_start();
	
	if(isset($_SESSION['views'])){
		
		$_SESSION['views'] = $_SESSION['views']+1;
	}else{
		
		$_SESSION['views'] = 1;
	}
	
	echo "浏览器：" . $_SESSION['views'];
	
	echo "<hr>";
	
	if(isset($_SESSION['views'])){
		unset($_SESSION['views']);
	}
?>