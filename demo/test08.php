
<form action="" method="post">
		名字: <input type="text" name="fname">
		年龄: <input type="text" name="age">
		<input type="submit" value="提交">
</form>
<?php
	//多位数组
	$state = $cars = array(
		"runoob" => array(
			"菜鸟教程","http://.runoob.com"
		),
		"google" => array(
			"google 搜索","http://google.com"
		),
		"taobao" => array(
			"淘宝","http://www.taobao.com"
		)
	);
	
	print_r($state);
	
	echo "<hr>";
	
	
	
	echo "姓名是：".$_POST['fname'];
	
	echo "<br>";
	
	echo "年龄是：".$_POST['age'];
	
?>