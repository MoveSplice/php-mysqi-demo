<?php
	
	function var_export_min($var,$return = false){
		
		if(is_array($var)){
			
			$toImplode = array();
			
			foreach($var as $key => $value){
				
				$toImplode[] = var_export($key,true) . '=>' .var_export_min($value,true);
				
			}
		
			
			$code = 'array(' . implode(',',$toImplode).')';
			
			if($return){
				
				return $code;
				
			}else{
				
				echo $code;
			}
			
		}else{
			
			return var_export($var,$return);
			
		}
		
	}

	var_export_min(12,false);
	
	echo "<hr>";
	
	
	function globalvars(){
		
		$result = array();
		
		$skip = array('GLOBALS','_NEV',
					
					'_POST','HTTP_POST_VARS',
					'_GET','HTTP_GET_VARS',
					'_COOKIE','HTTP_COOKIE_VARS',
					'_SERVER','HTTP_SERVER_VARS',
					'_FILES','HTTP_POST_FILES',
					'_REQUEST','HTTP_SERVER_VARS',
					'_SESSION');
					
					foreach($GLOBALS as $k=> $v){
						
						if(!in_array($k,$skip)){
							
							$result[$k] = $v;
							
							return $result;
						}
					}
	}
	
	var_export(globalvars());
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>