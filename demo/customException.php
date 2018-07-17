<?php
	
	class customException extends Exception{
		
		public function errorMessage(){
			
			//错误信息
			$errorMsg = '错误行号:' . $this -> getLine() . ' in ' .$this -> getFile() . ': <br>' . $this ->getMessage() . '<br> 不是一个合法的Email地址';
			
			return $errorMsg;
			
		}
		
	}
	
	$email = "326416055@qq.com";
	
	try{
		
		//检测邮箱
		if(filter_var($email,FILTER_VALIDATE_EMAIL)==='FALSE'){
			
			//如果是一个不合法的邮箱地址,就抛出异常
			
			throw new customException($email);
		}
	}catch(customException $e){
		
		echo $e -> errorMessage;
	}
	
	
	
	
?>