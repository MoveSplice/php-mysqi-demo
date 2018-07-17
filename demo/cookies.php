<?php

	setcookie("user","Runoob",time()+3600);
	
	if (isset($_COOKIE["user"]))
		echo "欢迎 " . $_COOKIE["user"] . "!<br>";
	else
		echo "普通访客!<br>";
?>