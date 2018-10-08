<?php
	$uname = $_GET['uname'] ;
	$upass = $_GET['upass'] ;
	echo $uname.'<br/>';
	echo $upass.'<br/>';
//	phpinfo();
//	echo '<pre>';								//获得数组
//	print_r(ini_get_all());
?>
<form action="" mothed="get">
	用户名<input type="text" name="uname" /><br/>
	密&nbsp;码<input type="text" name="upass"/><br/>
	<input type="submit" value="提交" />
</form>

<?php
	$str = "<div style='background:skyblue'><span>111111</span></div>";
	echo $str;
	echo strip_tags($str).'<br/>';				//111111
	echo strip_tags($str,'<span>').'<br/>';		
?>