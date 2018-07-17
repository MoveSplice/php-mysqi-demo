<?php
	
	class Site{
		
		var $url;
		
		var $title;
		
		function setUrl($par){
			
			$this -> url = $par;
			
		}
		
		function getUrl(){
			
			echo $this -> url . PHP_EOL;
			
		}
		
		function setTitle($par){
			
			$this -> title = $par;
			
		}
		
		function getTitle(){
			
			echo $this -> title . PHP_EOL;
		}
		
	}
	
	
	$runoob = new Site;
	
	$taobao = new Site;
	
	$google = new Site;
	
	
	$runoob -> setTitle("菜鸟教程");
	
	$taobao -> setTitle("淘宝");
	
	$google -> setTitle("Google 搜索");
	
	$runoob -> setUrl("www.runoob.com");
	
	$taobao -> setUrl("www.taobao.com");
	
	$google -> setUrl("www.google.com");
	
	$runoob -> getTitle();
	
	$taobao -> getTitle();
	
	$google -> getTitle();
	
	$runoob -> getUrl();
	
	$taobao -> getUrl();
	
	$google -> getUrl();
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>
