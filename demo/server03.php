<?php
	
	echo "<table style='border:1px solid black;'>";
	
	echo "<tr><th>ID</th><th>FirstName</th><th>LastName</th></tr>";
	
	class TableRows extends RecursiveIterator{
		
		function __constrcut($it){
			
			parent::__constrcut($it,self::LEAVES_ONLY);
			
		}
		
		function current(){
			
			return "<td style='width:150px;border:1px solid black;'>" .parent::current(). "</td>";
		}
		
		function beginChildren(){
			
			echo "<tr>";
		}
		
		function endChildren(){
			
			echo "</tr>" . "\n";
		}
		
	}
	
	$servername = "localhost";
	
	$username = "root";
	
	$password = "";
	
	$dbname = "mydb";
	
	try{
		
		$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
		
		$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		$stmt = $conn -> prepare("SELECT id,firstname,lastname FROM myguests");
		
		$stmt -> execute();
		
		//设置结果集为关联数组
		$result = $stmt -> setFetchMode(PDO::FETCH_ASSOC);
		
		foreach(new TableRows(new RecursiveIterator($stat->fetchAll())) as $k=>$v){
			
			echo $v;
		}
		
		
		
	}catch(PDOException $e){
			
		echo "Error:" .$e ->getMessage();
	}
	
	$conn = null;
	
	echo "</table>";
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

?>