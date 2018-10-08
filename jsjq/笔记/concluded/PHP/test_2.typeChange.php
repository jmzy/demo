<?php
	echo '整型（int） 转换 字符串（string）';
	$a = 100;
	$b = (string)$a;
	var_dump($a);//int 100
	var_dump($b);//string '100' (length=3)
	echo '<hr/>';
	
	echo '整型（int） 转换 字符串（string）';
	$f1 = 2017.5;
	$f2 = (string)$f1;
	var_dump($f2);//string '2017.5' (length=6)
	settype($f1,'string');
	var_dump($f1);//string '2017.5' (length=6)
	
	
	echo '<hr/>';
	echo '字符串（string） 转换 整型';
	$c = '100abc';
	$d = (int)$c;
	$e = '100abc1111';
	$f = (int)$e;
	$g = 'aaa100abc1111';
	$h = (int)$g;
	$i = 'aaa';
	$j = (int)$i;
	var_dump($c);//string '100abc' (length=6)
	var_dump($d);//int 100
	var_dump($e);//string '100abc1111' (length=10)
	var_dump($f);//int 100
	var_dump($g);//string 'aaa100abc1111' (length=13)
	var_dump($h);//int 0
	var_dump($i);//string 'aaa' (length=3)
	var_dump($j);//int 0

	echo '<hr/>';
	echo '字符串（string） 转换浮点（float）';

	$a1 = '2017.5.21 礼拜天';
	$a2 = (int)$a1;
	$b1 = '2017.5.21';
	$b2 = (int)$b1;
	var_dump($a1);//string '2017.5.21 礼拜天' (length=19)
	var_dump($a2);//int 2017
	var_dump($b1);//string '2017.5.21' (length=9)
	var_dump($b2);//int 2017
	$c2 = (float)$a1;
	var_dump($c2);//float 2017.5
	$d2 = (float)$b1;
	var_dump($c2);//float 2017.5
	$e1 = 'aaa2017.5.21 礼拜天';
	$e2 = (float)$e1;
	var_dump($e2);//float 2017.5

	echo '<hr/>';
	echo '具体转换函数';
	$ta1 = '100';
	$ta2 = intval($ta1);
	$ta3 = floatval($ta1);
	$ta4 = strval($ta1);
	var_dump($ta2);//int 100
	var_dump($ta3);//float 100
	var_dump($ta4);//string '100' (length=3)
	
	class tClass{
		
	};
	$ta5 = new tClass();
	var_dump($ta5);//object(tClass)[1]
//	$ta6 = intval($ta5);
//	var_dump($ta5);//报错 对象不能转换成

?>


