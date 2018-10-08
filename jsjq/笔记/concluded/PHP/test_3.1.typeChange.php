<?php
	$uname = empty($_POST['uname'])?'没有填写姓名':$_POST['uname'];
	$uage = empty($_POST['uage'])?'没有填写年龄':$_POST['uage'];
	$usex = empty($_POST['usex'])?'没有填写性别':$_POST['usex'];
	$uaddress = empty($_POST['uaddress'])?'没有填写地址':$_POST['uaddress'];
	$uno = empty($_POST['uno'])?'没有填写电话':$_POST['uno'];
	$uqq = empty($_POST['uqq'])?'没有填写QQ':$_POST['uqq'];
	$utext = empty($_POST['utext'])?'没有填写自我评价':$_POST['utext'];
	echo "姓名：{$uname}<br/>年龄：{$uage}<br/>性别：{$usex}<br/>
		地址：{$uaddress}<br/>电话：{$uno}<br/>QQ：{$uqq}<br/>自我评价：{$utext}";
?>