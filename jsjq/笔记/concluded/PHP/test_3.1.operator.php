<?php
	//★8 30：00
	$userArr = array('aaa','bbb','ccc');
	$upassArr = array('aaa'=>'123456','bbb'=>'234567','ccc'=>'345678');
	$uname = isset($_GET['uname'])?$_GET['uname']:'';//isset是判断是否变量
	$upass = isset($_GET['upass'])?$_GET['upass']:'';
	if(in_array($uname,$userArr)){//判断$uname是否在数组$userArr里
		if($upass == $upassArr[$uname]){//password是否与数组的key值相同
			echo '登录成功';
			$ok = true;
		}else{
			echo ('密码错误');
		};
	}else{
		echo ('用户名不存在');
	};
?>

	
<html>
	<head>
		<meta charset="utf-8"/>
		<title>test operator</title>
	</head>

	<body>
		<form action="" method="get">
			用户名: <input type="text" name="uname"/><br />
			密码  ： <input type="password" name="upass"/><br />
			<input type="submit" id="" value="登录" />
		</form>
	</body>
</html>