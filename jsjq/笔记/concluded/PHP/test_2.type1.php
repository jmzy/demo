<?php
	error_reporting(E_ALL ^ E_NOTICE); 
	
	$str = "";
//	var_dump($str);
	echo $str;//
	$str1 = "1as dad da";
	echo $str1;//1as dad da
	echo '<br/>';
	$str2 = '百度\'一下\'你就知道';
	$str3 = "百度\'一下\'你就知道";
	$str4 = "百度'一下'你就知道";
	echo $str2;//百度'一下'你就知道
	echo '<br/>';
	echo $str3;//百度\'一下\'你就知道
	echo '<br/>';
	echo $str4;//百度'一下'你就知道
	echo '<br/>';
	echo '<br/>';
	
	$str5 = 'baidu$str3';
	$str6 = "baidu$str3";
	echo $str5;//baidu$str3
	echo '<br/>';
	echo $str6;//baidu百度\'一下\'你就知道
//	$str7 = "bai$str3du" ;//报错
	$str8 = "bai($str3)du" ;
//	echo $str7;
	echo '<br/>';
	echo $str8;//bai(百度\'一下\'你就知道)du
	echo '<br/>';
	echo '<br/>';
	
	$str9 = "bai{$str3}du" ;
	echo $str9;//bai百度\'一下\'你就知道du
	echo '<br/>';
	echo '<br/>';
	
	$str10 = "bai\$str3du" ;
	echo $str10;//bai$str3du
	echo '<br/>';
	echo '<br/>';
	
	$nStr = '百度 -- baidu.com';
	$Delimiter = <<<h1
	<h1 style='width:250px;color:#ccc;border:1px solid skyblue;'>Delimiter test</h1>	
	<span style='color:black'>$nStr</span>	
h1;
	echo $Delimiter;//<h1>Delimiter test</h1>	
	echo '<br/>';
	echo '<br/>';
	
	$a = $_GET["uname"];
	if($a){
		echo '你的用户名是'.$a;
	}else{
		echo '请输入用户名';
	}
?>

<html>
	<head>
		
	</head>
	<body>
		<form action="" method="">
			用户名：<input type="text" name="uname" />
			<input type="submit" value='提交' />
		</form>
	</body>
</html>