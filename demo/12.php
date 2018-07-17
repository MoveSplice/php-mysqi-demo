<?php
	$test = '菜鳥教程';
	
	$username = isset($test) ? $test : 'nobody';
	
	echo $username, PHP_EOL;
	
	echo "<br>";
	
	$x = array("a"=>"red","b"=>"green");
	
	$y = array("c"=>"blue","d"=>"yellow");
	
	$z = $x + $y;
	
	var_dump($z);
	
	echo "<br>";
	
	var_dump($x==$y);
	
	echo "<br>";
	
	var_dump($x===$y);
	
	echo "<br>";
	
	var_dump($x!=$y);
	
	echo "<br>";
	
	var_dump($x<>$y);
	
	echo "<br>";
	
	var_dump($x!==$y);
	
	echo "<hr>";
	
	$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
	
	echo $username;
	
?>