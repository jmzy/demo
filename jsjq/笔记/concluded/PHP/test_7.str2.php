<?php
	$num = 152;
	$num1 = 123;
	printf('%f',$num);								//%fz转换浮点类型	152.000000
	echo '<br/>';
	printf('%.2f',$num);							//%.2f指定小数点		152.00
	echo '<br/>';
	printf('数字%.2f 两为小数点',$num);				//数字152.00 两为小数点
	echo '<br/>';
	printf("数字%.2f %.1f两为 小数点",$num,$num1);	//数字152.00 123.0两为 小数点
	echo '<br/>';
	printf("数字%1\$.1f 两为小数点%1\$u",$num);		//数字152.000000 两为小数点152

	//-----------------------------
	echo "<br/> ---字符串截取<br/> ";
	$a = 'baidu.com';
	$str = substr($a,4);							//u.com
	echo $str.'<br/>';
	$str = substr($a,4,2);	
	echo $str.'<br/>';								//u.
	
	//-----------------------------
	echo "<br/> ---字符串查找<br/> ";
	$a = 'baidu.com';
	$str = strchr($a,'com');						//com
	$str1 = strchr($a,'baidu');						//baidu.com
	$str2 = strchr($a,'aa');						// 	(空)
	echo $str.'<br/>';
	echo $str1.'<br/>';
	echo $str2.'<br/>';
	
	$b = 'co';
	$c = '1com';
	echo strrchr($a,$b).'<br/>';					//com
	echo strrchr($a,$c).'<br/>';					// 	(空)
	echo strpos($a,$b).'<br/>';						//6
	echo strpos($a,$c).'<br/>';						// 	(空)
	
	//-----------------------------
	echo "<br/> ---通过字符串把主字符串进行拆分成数组<br/> ";
	$a = 'a.bb.ccc.d.e.f';
	$arr = strtok($a,'.');
	echo $arr.'<br/>';								//a
	echo strtok('.').'<br/>';						//bb
	
	//-----------------------------
	echo "<br/> ---把字符串中的截取为变量<br/> ";
	$a = 'www.baidu.com?uname=aaa&age=10';
	echo substr($a,strpos($a,'?')+1).'<br/>';		//uname=aaa&age=10
	parse_str(substr($a,strpos($a,'?')+1)) ;		
	echo "uname:{$uname}、age:{$age}".'<br/>';		//uname:aaa、age:10
	
	//-----------------------------
	echo "<br/> ---把字符串按指定指定大写拆分<br/> ";	
	echo chunk_split($a,3).'<br/>';					//www .ba idu .co m?u nam e=a aa& age =10
	echo chunk_split($a,3,'--').'<br/>';			//www--.ba--idu--.co--m?u--nam--e=a--aa&--age--=10--
	
	//-----------------------------
	echo "<br/> ---字符串替换函数<br/> ";	
	$str1 = str_replace('w','W',$a);
	echo $str1.'<br/>';								//WWW.baidu.com?uname=aaa&age=10
	$arr1 = array('b','a');
	$arr2 = array('BB','AA','II');
	echo str_replace($arr1,$arr2,$a).'<br/>';		//www.BBAAidu.com?unAAme=AAAAAA&AAge=10
	$b = str_replace($arr1,$arr2,$a,$c);
	echo $c.'<br/>';								//7
	
	//-----------------------------
	echo "<br/> ---字符串比较函数<br/> ";		
	echo strcmp('aaa','aaa').'<br/>';				//0
	echo strcmp('aaa','aav').'<br/>';				//-1
	echo strcmp('aaa','aa').'<br/>';				//1
	echo strcmp('10','2').'<br/>';					//-1
	echo strnatcmp('10','2').'<br/>';				//1
	echo strncmp('102','101',2).'<br/>';			//0
	
	echo similar_text('aaaaab','aaaaac').'<br/>';	//5
	$a = similar_text('aaaaab','aaaaac',$b);		
	echo $b.'<br/>';								//83.333333333333
	
	$a = 'www.baidu.com?uname=aaa&age=10';
	echo strtr($a,'www','WWW').'<br/>';				//WWW.baidu.com?uname=aaa&age=10
	
	//关联数组替换
	$b = array('www'=>'WWW','du'=>'DU');
	echo strtr($a,$b).'<br/>';						//WWW.baiDU.com?uname=aaa&age=10
	
	echo substr_count($a,'w').'<br/>';				//3
	echo substr_count($a,'w',0,2).'<br/>';			//2
	echo substr_count($a,'w',0,5).'<br/>';			//2
	
	
	
	
	
	
	
	
?>