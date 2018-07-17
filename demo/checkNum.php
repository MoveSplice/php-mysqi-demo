<?php
	
	function checkNum($number){
		
		if($number>1){
			
			throw new Exception("Value must be 1 or below");
		}
		
		return true;
		
	}
	
	try{
		
		checkNum(2);
		
		echo "如果输出该内容，说明$number是变量";
		
	}catch(Exception $e){
		
		echo 'Message:' . $e -> getMessage();
	}
	
	
	
	
?>