<?php
	$x = 5;
	function myTest($x){
		$y=10;
		echo "<p>測試函數内的變量:</p>";
		echo "變量x為:$x";
		echo "<br>";
		echo "變量y為:$y";
	}
	myTest($x);
	echo "<p>测试函数外变量:<p>"; 
	echo "变量 x 为: $x"; 
	echo "<br>"; 
	echo "变量 y 为: $y"; 
?>