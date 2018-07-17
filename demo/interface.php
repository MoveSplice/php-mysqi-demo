<?php

	interface base{
 
	   //获取name
	   public function name();
	   
	   //获取age
	   public function age();
	}
 
	//学生类
	class student implements base{
	 
	   public function name(){
		  echo "获取学生姓名<br>";
	   }
	   
	   public function age(){
		  echo "获取学生年龄<br>";
	   }
	}
 
	//老师类
	class teacher implements base{
	 
	   public function name(){
		  echo "获取老师姓名<br>";
	   }   
	   
	   public function age(){
		  echo "获取老师年龄<br>";
	   }
	}
 
	//定义操作类
	class get{
	 
	   public function common_get_name($base){
		  $base->name();
	   }
	   
	   public function common_get_age($base){
		  $base->age();
	   }
	}
	 
	//实例化操作类，相同的方法，传入不同的对象参数，取得不同的结果
	$get = new get();
	$get->common_get_name(new student());
	$get->common_get_name(new teacher());
	$get->common_get_age(new student());
	$get->common_get_age(new teacher());
?>