<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php 
	
	$name = $_POST['fname']; 
	
	echo $name; 
	
	echo "<hr>";
	
	$x = array("one","tow","three");
	
	foreach($x as $value){
		echo $value."<br>";
	}

	
	echo "<hr>";
	
	
	function writeName($fname){
		
		echo $fname . "Refsnes.<br>";
		
	}

	echo "My name is";
	
	writeName("Kai Jim");
	
	echo "My sister's name is";
	
	writeName("Hege");
	
	echo "My brother's name is";
	
	writeName("Stale");
	
	
	echo "<hr>";
	
	function writeNames($fname,$punctuation){
		
		echo $fname."Refsnes".$punctuation."<br>";
		
	}
	
	echo "My name is";
	
	writeNames("Kai",".");
	
	echo "My sister's name is";
	
	writeNames("Hege","!");
	
	echo "My brother's name is";
	
	writeNames("Stale","?");
	
	echo "<hr>";
	
	function add($x,$y){
		
		$total = $x + $y;
		
		return $total;
		
	}

	echo "1111111+63=".add(11111111,63);
	
	echo "<hr>";
	
	echo '这是第几行"' . __LINE__ . '"行';
	
	echo "<br>";
	
	echo '该文件在"' . __FILE__ . '"';
	
	echo "<br>";
	
	echo '该文件位于"' . __DIR__ . '"';
	
	echo "<hr>";
	
	function test(){
		
		echo '函数名为;' . __FUNCTION__;
	}
	
	test();
	
	echo "<hr>";
	
	class test{
		function _print(){
			
			echo '类名为:' .__CLASS__ . "<br>";
			
			echo '函数名为:' .__FUNCTION__ ;
		}
	}
	
	$t = new test();
	
	$t->_print();
	
	echo "<hr>";
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

?>





























</body>
</html>