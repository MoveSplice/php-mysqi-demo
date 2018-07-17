<?php

	if ($_FILES["file"]["error"] > 0)
	{
		echo "错误：" . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
		echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
		echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"];
	}

	$alloweExts = array("gif","jpeg","jpg","png");
	
	$temp = explode(".",$_FILES['file']['name']);
	
	$extension = end($temp);
	
	if((
	  ($_FILES['file']['type']=='image/gif')
	||($_FILES['file']['type']=='image/jpeg')
	||($_FILES['file']['type']=='image/jpg')
	||($_FILES['file']['type']=='image/pjpeg')
	||($_FILES['file']['type']=='image/x-png')
	||($_FILES['file']['type']=='image/png')
	&&($_FILES['file']['type']['zise']<204800)
	&& in_array($extension, $allowedExts))){
		
		if($_FILES['file']['type']>0){
			
			echo "錯誤::" . $_FILES['file']['error'] . "<br>";
			
		}else{
			
			echo "上傳文件名:" . $_FILES['file']['name'] ."<br>";
			
			echo "文件类型" . $_FILES['file']['type'] . "<br>";
			
			echo "文件大小" . $_FILES['file']['size'] . "kb<br>";
			
			echo "文件臨時存儲" . $_FILES['file']['tmp_name'] . "<br>";
			
			
			if(file_exists("upload". $_FILES['file']['name'])){
				
				echo $_FILES['file']['name'] . "文件已經存在";
			}else{
				
				//如果upload目錄不存在該文件則將文件上傳到upload目錄下
				
				move_uploaded_file($_FILES['file']['tmp_name'],"upload" . $_FILES['file']['name']);
					
				echo "文件已經存在:" . "upload" . $_FILES['file']['name'];
				
			}
		}
	}else{
		
		echo "非法的文件格式";
	}

	
	
	
	
	
	
	
	
	
	
	

?>