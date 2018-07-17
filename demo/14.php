<?php
	$x = 75;
	$y = 25;
	
	function addition(){
		
		$GLOBALS['z'] = $GLOBALS['y'] = $GLOBALS['x'];
		
	}
	
	addition();
	
	echo $z;
	
	echo "<hr>";
	
	echo $_SERVER['PHP_SELF'];
	
	echo "<br>";
	
	echo $_SERVER['SERVER_NAME'];
	
	echo "<br>";
	
	echo $_SERVER['HTTP_HOST'];
	
	echo "<br>";
	
	echo $_SERVER['HTTP_REFERER'];
	
	echo "<br>";
	
	echo $_SERVER['HTTP_USER_AGENT'];
	
	echo "<br>";
	
	echo $_SERVER['SCRIPT_NAME'];
	
	echo "<hr>";
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>