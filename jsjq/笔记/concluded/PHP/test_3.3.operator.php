<?php
	$baidu = 'baidu.com';
	$taobao = 'taobao.com';
	$new = "<h2>".$baidu.$taobao."</h2>";
	//baidu.comtaobao.com
	echo $new."<br/>";
	$baidu.='百度';
	echo $baidu."<br/>";//baidu.com百度

	//实现 @ 禁止警告
	$file_name = "test1.txt";
	$flie = @fopen("test1.txt",'r');//打开文件、r读方法打开
	$content = @fread($file,filesize($file_name));//把读取的值赋值给$content
	echo $content;
	echo "<br/>";1

	$a = 1;
//	$a == 1 || $b = 2;//第2个表达式是1个赋值表达式、生成$b
	//第1个表达式为真、后面不会执行会短路
	//echo $b;//不执行
//	echo '$b ='.$b;//$b =  
?>
