<?php

//异步上传，post提交过来的image是字符串
$path = $_POST['image'];

//注意相对路径和绝对路径问题，此为demo，开发请灵活判断

//检测图片路径
if(file_exists($path)) {
	if(unlink($path)) {
		die;
	}else{
	    die("error");
	}
}else{
    die("error");
}