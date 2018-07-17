<?php

	namespace MyProject{
		
		const CONNECT_OK = 1;
	
		class Connection{};
		
		function connect(){
			
		};
	}
	

	namespace AnotherProject{
		
		namespace CONNECT_OK = 1;
	
		class Connection{};
		
		function connect(){
			
		};
	}
	
	declare(encoding='utf8_decode');
	
	namespace MyProject{
		
		session_start();
		
		$a = MyProject \ connect();
		
		
		echo MyProject \ Connection::stat();
	}


?>