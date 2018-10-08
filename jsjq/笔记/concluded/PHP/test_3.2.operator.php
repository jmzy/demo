<?php
	echo "按位与 &<br/>";
	echo "当同位均为1的时候返回1、否则返回0&<br/>";
	$a = 5;
	$b = 6;
	$a = decbin($a);//把十进制转换成2进制 //101
	$b = base_convert($b,10,2);//由十进制转换成2进制 //110
	echo $a.'<br/>'.$b.'<br/>';//$a --- 101
	echo "-----------<br/>";//$b --- 110
	echo $a & $b;//100
	echo "<br/>";
	echo $a | $b;//111
	echo "<br/>";
	$a = 5;
	$b = 6;
	echo decbin($a ^ $b);// 11
	echo "<br/>";
	echo decbin(~ $b);	//11111111111111111111111111111001
	echo "<br/>";
	echo decbin($a << 1);//1010 左移右边数1为、末位补0
	echo "<br/>";
	echo decbin($a >> 1);//10 右移左边数1为、末位补0 //实际是010
?>