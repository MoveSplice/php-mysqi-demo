<?php
	class car{
		var $color;
		function __construct($color="green"){
			$this->color = $color;
		}
		
		function what_color(){
			return $this->color;
		}
	}
	
	function print_vars($obj){
		foreach(get_object_vars($obj) as $prop => $val){
			echo "\t$prop = $val\n"; 
		}
	}
	
	$herbie = new Car("white");
	
	echo "\therbie: Properties\n";
	
	print_vars($herbie);
	
	echo "<br>";
	
	$x = "hello world";
	
	echo $x;
	
	echo "<br>";
	
	$x = null;
	
	echo "<br>";
	
	var_dump($x);
?>