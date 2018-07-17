<?php

	$favcolor = 'red';
	
	switch($favcolor){
		
		case 'red':
		
			echo '你喜歡的顔色是紅色';
			
			break;
			
		case 'blue':
		
			echo '你喜歡的顔色是藍色';
			
			break;
			
		case 'green':
		
			echo '你喜歡的顔色是綠色';

			break;
		
		default:
			echo '沒有你喜歡的顔色';
	}
	
	echo '<br>';
	
	$cars = array("Volvo","BMW","Toyeto");
	
	echo count($cars);
	
	echo '<br>';
	
	$arrlength = count($cars);
	
	for($x=0;$x<$arrlength;$x++){
		
		echo $cars[$x];
		
		echo '<br>';
	}
	
	echo '<hr>';
	
	$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
	
	echo "Peter is".$age['Peter']."years old .";
	
	echo "<br>";
	
	foreach($age as $x=>$x_value){
		
		echo "key=" .$x.",Value=".$x_value;
		
		echo "<br>";
	}
	
	echo "<hr>";
	
	$cars = array("VOLVO","BMW","Toyeyo");
	
	sort($cars);
	
	print_r($cars);
	
	echo "<hr>";
	
	$number = array(4,6,2,22,11);
	
	print_r($number);
	
	echo "<hr>";
	
	sort($number);
	
	print_r($number);
	
	echo "<hr>";
	
	$cars = array("Volvo","BMW","Toyeto");
	
	rsort($cars);
	
	print_r($cars);
	
	echo "<hr>";
	
	$number = array(4,6,2,22,11);
	
	rsort($number);
	
	print_r($number);
	
	echo "<hr>";
	
	$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"42");
	
	arsort($age);
	
	print_r($age);
	
	echo "<hr>";
	
	asort($age);
	
	print_r($age);
	
	echo "<hr>";
	
	$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
	
	echo "ksort----";
	
	ksort($age);
	
	print_r($age);
		
	echo "<hr>";
	
	echo "arsort----";

	arsort($age);
	
	print_r($age);
	
	echo "<hr>";
	
	echo "krsort------";
	
	krsort($age);
	
	print_r($age);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>