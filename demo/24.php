<?php

	abstract class AbstractClass{
		
		//我们的抽象方法仅仅需要定义要的参数
		
		abstract protected function prefixName($name);
		
	}
	
	class ConcreteClass extends AbstractClass{
		
		//我们的子类可以定义父级签名中不存在的可选参数
		
		public function prefixName($name,$separator = "."){
			
			if($name=="Pacman"){
				
				$prefix = "Mr";
				
			}else if($name=="Pacwoman"){
				
				$prefix = "Mrs";
				
			}else{
				
				$prefix = "";
				
			}
			
			return "{$prefix}{$separator}{$name}";
		}
	}
	
	$class = new ConcreteClass;
	
	echo $class ->prefixName("pacman"),"\n";
	
	echo $class ->prefixName("pacwoman"),"\n";
	
?>