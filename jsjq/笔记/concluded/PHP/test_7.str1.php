<?php
	$a = 'aaa';
	$b ="bbb里面有个{$a}、看看有没有括号<br/>";
	$c ="bbb里面有个[$a]、看看有没有括号<br/>";
	$d ="bbb里面有个($a)、看看有没有括号<br/>";
	echo $b;
	echo $c;
	echo $d;
	
	$a = nl2br('a\naaaa<br/>');
	$b = nl2br("b\nbb<br/>");
	echo $a;
	echo $b;
	
	echo '<br/>';
	
	$c = <<<aa
		11qq旺旺'ss'{$a}<br/>换行成功、就到这了'
aa;
	echo $c;
	
///-------------------------------------
//	字符串处理函数

	echo '<br/><br/>------------------------------------<br/>';
	echo '字符串处理空格函数'.'<br/>';
	$a = '  aaa  ';
	echo strlen($a).'<br/>';				//7
	echo strlen(trim($a)).'<br/>';			//5
	echo strlen(ltrim($a)).'<br/>';			//3
	echo strlen(rtrim($a)).'<br/>';			//3
	
	echo '<br/><br/>------------------------------------<br/>';
	echo '字符串处理大小写函数'.'<br/>';
	echo strtolower($a).'<br/>';			//aaa
	echo strtoupper($a).'<br/>';			//AAA
	$a = 'a boy c do eat food';
	echo ucfirst($a).'<br/>';				//A boy c do eat food
	$a = ' a at apple and as';
	echo ucwords($a).'<br/>';				//A At Apple And As
	
	echo '<br/><br/>------------------------------------<br/>';
	echo '字符串处理填充函数'.'<br/>';
	$a ='baidu.com';
	echo $a.'<br/>';
	echo str_pad($a,5,'+').'<br/>';					//不执行
	echo strlen($a).'<br/>';						//9 不变
	echo str_pad($a,10,'+').'<br/>';				//baidu.com+
	echo strlen(str_pad($a,10,'+')).'<br/>';		//10
	echo str_pad($a,12,'+').'<br/>';				//baidu.com+++ 默认往最后+
	echo str_pad($a,12,'+',STR_PAD_BOTH ).'<br/>';	//+baidu.com++
	echo str_pad($a,12,'+',STR_PAD_LEFT ).'<br/>';	//+++baidu.com
	echo str_pad($a,12,'+',STR_PAD_RIGHT).'<br/>';	//baidu.com+++
	
	echo '<br/><br/>------------------------------------<br/>';
	echo '字符串反转函数'.'<br/>';
	$a = 'abcdefg';
	echo strrev($a).'<br/>';						//gfedcba
	echo '<br/>';


	echo '<br/><br/>------------------------------------<br/>';
	echo 'md5'.'<br/>';
//	$pwd = '123456a';
//	echo md5($pwd).'<br/>';							//9cbf8a4dcb8e30682b927f352d6559a0
	$a = md5($_GET['upass']);
	if($a == '9cbf8a4dcb8e30682b927f352d6559a0'  ){
		echo "密码正确";
	}else{
?>
		<form action="" mothod='get'>
			用户名：<input type="text" name="uname" /><br/>
			密码：<input type="password" name="upass" /><br/>
			<input type="submit" value="提交" />
		</form>
<?php
	}
	
	
	echo '<br/><br/>------------------------------------<br/>';
	echo '格式化金额字符串函数'.'<br/>';
	//number_format(str,'小数位数','小数点','千位分隔符')
	$a = '154321';
	echo number_format($a,3).'<br/>';				//154,321.000
	echo number_format($a,3,'|','+').'<br/>';		//154+321|000
	
	echo '<br/><br/>------------------------------------<br/>';
	echo '字符串拆分成数组'.'<br/>';
	//explode('用语在哪个字符串中技能型拆分'，'拆分的字符串'，['返回数组元素的数目'])
	$a = 'abcdefg,hijklnm,中文字,一二三四五六七';
	$arr = explode(',',$a);
	var_dump($arr);
	/*
	array (size=4)
	  0 => string 'abcdefg' (length=7)
	  1 => string 'hijklnm' (length=7)
	  2 => string '中文字' (length=9)
	  3 => string '一二三四五六七' (length=21)
	*/
	
	$arr = explode(',',$a,2);
	var_dump($arr);
	/*
	array (size=2)
	  0 => string 'abcdefg' (length=7)
	  1 => string 'hijklnm,中文字,一二三四五六七' (length=39)
	 */
	
	echo '<br/><br/>------------------------------------<br/>';
	echo '把数组元素组合成字符串'.'<br/>';
	$arr2 = ['a',111,'b'];
	var_dump($arr2);
	/*
	array (size=3)
	  0 => string 'a' (length=1)
	  1 => int 111
	  2 => string 'b' (length=1)
	*/
	$str = implode($arr2);
	echo $str.'<br/>';								//a111b	
	echo var_dump($str).'<br/>';					//string 'a111b' (length=5)
	
	
	
?>
