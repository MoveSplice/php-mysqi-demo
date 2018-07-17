<?php

	class MyClass{
		
		public $public = 'public';
		
		protected $protected = 'protected';
		
		private $private = 'private';
		
		function printHello(){
			
			echo $this -> public;
			
			echo "<br>";
			
			echo $this -> protected;
			
			echo "<br>";
			
			echo $this -> private;
			
		}
		
		
	}
	
	$obj = new MyClass();
	
	$obj -> printHello();
	
	class MyClass2 extends MyClass{
		
		protected $protected = 'Protected2';
		
		function printHello(){
			
			echo $this -> public;
			
			echo "<br>";
			
			echo $this -> protected;
			
			echo "<br>";
			
			echo $this -> private;
			
		}
	}
	
	$obj2 = new MyClass2();
	
	$obj2 -> printHello();
	
	
	
?>