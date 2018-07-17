<?php

	class MyClass{
		
		//声明就不共有的构造函数
		public function __construct(){}
		
		//声明一个共有的方法
		public function MyPublic(){
			
			echo "hahaha";
			
			echo "<br>";
		}
		
		//声明一个受保护的方法
		protected function MyProtected(){
			echo "<br>";
			print "vb";
		}
		
		//声明一个私有的方法
		private function MyPrivate(){}
		
		//此方法为共有
		
		function Foo(){
			
			$this ->MyPublic();
			
			$this ->MyProtected();
			
			$this ->MyPrivate();
		}
		
	}
	
	$MyClass = new MyClass();
	
	$MyClass -> MyPublic();
	
	$MyClass -> Foo();
	
	class MyClass2 extends MyClass{
		
		//此方法为共有
		function Foo2(){
			
			$this -> MyPublic();
			
			$this -> MyProtected();
			
			//$this -> MyPrivate();
		}
	}
	
	$MyClass2 = new MyClass2;
	
	$MyClass2 -> MyPublic();
	
	$MyClass2 -> Foo2();
	
	
	echo "<hr>";
	
	class Bar{
		
		public function test(){
			
			$this ->testPrivate();
			
			$this ->testPublic();
			
		}
		
		public function testPublic(){
			
			echo "Bar::testPublic\n";
			
		}
		
		private function testPrivate(){
			
			echo "Bar::testPrivate\n";
			
		}
		
		
	}
	
	
	class Foo extends Bar{
		
		public function testPublic(){
			
			echo "Foo::testPublic\n";
			
		}
		
		private function testPrivate(){
			
			echo "Foo::testPrivate\n";
			
		}
	}
	
	
	$myFoo = new Foo();
	
	$myFoo -> test();
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

?>