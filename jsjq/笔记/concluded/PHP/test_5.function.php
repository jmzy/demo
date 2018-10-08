<?php
	$a = 'aaaaa';
	function change(){
		return $a = 'bbb';
	}
	change();
	echo $a.'<br/>';//aaaaa
	
//--------------------
	$a = change();	//bbb
	echo $a.'<br/>';

//--------------------
	$b = 'bbb1';
	function changeB(){
		global $b;
		return $b = 'aaa';
	};
	changeB();
	echo $b.'<br/>';
//--------------------
	echo '<br/>';
	$c = 'ccc';
	function changeC(){
		global $c;
		$c = 'ddddd';
		unset($c);
		$c = 'ddd2';
	};
	changeC();
	echo $c.'<br/>';
	
//--------------------
	echo '<br/>';
	function countI(){
		$i = 1;
		$i++;
		echo $i."<br/>";
	};
	countI();
	countI();
	countI();
	
	echo '<br/>';
	function countJ(){
		static $j = 1;
		$j++;
		echo $j."<br/>";
	};
	countJ();
	countJ();
	countJ();
	
//--------------------
	echo '<br/>';
	function a($name){
		$name = $name.'和b';
		echo $name.'在写代码'."<br/>";
	};
	$name = 'a';
	a($name);
	echo $name."<br/>";
	
	function b(&$name){
		$name = $name.'和b';
	};
	$name = 'a';
	b($name);
	echo $name."<br/>";
	
//--------------------
	echo '<br/>';
	function func(){
		print_r(func_get_args());
	};
	func('a','b','c','d','f');
	//Array ( [0] => a [1] => b [2] => c [3] => d [4] => f )
	
	echo '<br/>';
	function funcT(){
		$arr = func_get_args();
		foreach($arr as $key=>$value){
			echo "字母".($key+1)."、字母是{$value}<br/>";
		};
		echo '1共'.func_num_args().'个'.'<br/>';
		echo '第3位字母是'.func_get_arg(2).'<br/>';
	};
	funcT('a','b','c','d','f');
	/*
	字母1、字母是a
	字母2、字母是b
	字母3、字母是c
	字母4、字母是d
	字母5、字母是f
	1共5个
	第3位字母是c
	*/
	
//--------------------
	echo '<br/>';
	$c = 'show_date';
	function show_date(){
		echo date('Y-m-d');
	};
	echo $c.'<br/>';//show_date
	$c();//2017-06-13
		
//--------------------
	echo '<br/><br/><br/>';
	function jc($i){
		if($i>1){
			$s = $i * jc($i-1);
		}else{
			$s = $i;
		}
		return $s;
	};
	echo jc(3);
	
?>