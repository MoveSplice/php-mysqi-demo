<?php
	class Site{
		var $url;
		var $title;
		function __construct($par1,$par2){
			
			$this -> url = $par1;
			$this -> title = $par2;
		}
		
		function setUrl($par){
		
			echo $this -> url = $par;
		
		}
		
		function getUrl(){
			echo $this ->url . PHP_EOL;
		}
		
		function setTitle($par){
			$this -> title =$par;
		
		}
		
		function getTitle(){
			echo $this -> title . PHP_EOL;
		}
		
	}
	
	
	
	$runoob = new Site('www.runoob.com','菜鳥教程');
	
	$taobao = new Site('www.taobao.com','淘寶');
	
	$google = new Site('www.google.com','Google 搜索');
	
	$runoob -> getTitle();
	$taobao -> getTitle();
	$google -> getTitle();
	
	$runoob -> getUrl();
	$taobao -> getUrl();
	$google -> getUrl();
	
	echo "<hr>";
	
	
	class MyDestructableClass{
		
		function __construct(){
			
			print "構造函數";
			
			$this -> name = "MyDestructableClass";
			
		}
		
		function __destruct(){
			
			print "銷毀".$this -> name ."\n";
			
		}
		
	}
	
	$obj = new MyDestructableClass();
	
	echo "<hr>";
	
	class Child_Site extends Site{
		
		var $category;
		
		function setCate($par){
			
			$this -> category = $par;
			
		}
		
		function getCate(){
			
			echo $this -> category . PHP_EOL;
			
		}
		
	}
	
	echo "<hr>";
	
	function getUrl(){
		
		echo $this ->url . PHP_EOL;
		
		return $this -> url;
		
	}
	
	function getTitle(){
		
		echo $this -> title . PHP_EOL;
		
		return $this -> title;
		
	}










	
	
	
	
?>