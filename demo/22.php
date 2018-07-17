<?php
	
	class MyClass{
		
		const constant = '常量值';
		
		function showConstant(){
			
			echo self::constant . PHP_EOL;
			
		}
		
	}
	
	echo MyClass::constant . PHP_EOL;
	
	$classname = "MyClass";
	
	echo $classname::constant . PHP_EOL;
	
	$class = new MyClass();
	
	$class ->showConstant();
	
	echo $class::constant . PHP_EOL;

?>