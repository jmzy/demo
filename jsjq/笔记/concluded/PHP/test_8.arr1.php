<?php
	$arr1 = array('a','b','c');
	echo '26个字母、第1个是 '.$arr1[0].' 、第2个是'.$arr1[1].' 、第3个是'.$arr1[2];

	echo '<br/>--------------------<br/>';
	$arr2[0] = 'a';
	echo $arr2[0];
	var_dump($arr2);
		
	echo '<br/>--------------------<br/>';
	echo count($arr1).'<br/>';
	
	for($i=0;$i<3;$i++){
		echo $i.'--'.$arr1[$i].'<br/>';
	};

	echo '<br/>--------------------<br/>';
 	$arr3['a'] = 'a';
 	$arr3['b'] = 'b';
 	foreach($arr3 as $key=>$val){
 		echo $key.'='.$val.'<br/>';
 	};

	echo '<br/>--------------------<br/>';		
	$arr4 = array(1,2,3,4,5,2,34,50);
	$allNum = null;
	for($i=0;$i<count($arr4);$i++){
		$allNum += $arr4[$i];
	};
	echo $allNum.'<br/>';
	echo $allNum/count($arr4).'<br/>';
	echo count($arr4).'<br/>';//8
	
	echo '<br/>--------------------<br/>';	
	$arr5 = array(5=>'e','f','g');
	echo count($arr5).'<br/>';
	echo $arr5[5].'<br/>';//3
//	echo $arr5[3].'<br/>';// Undefined 
	echo $arr5[6].'<br/>';//f
	echo $arr5[7].'<br/>';//g
	
	echo '<br/>--------------------<br/>';	
	$arr6[true]= 1;
	$arr6[false]= 0;
	$arr6[null]= 'a';
	echo count($arr6).'<br/>';//3
	echo $arr6[0].'<br/>';//0
	echo $arr6[1].'<br/>';//1
	echo $arr6[''].'<br/>';//a
	echo $arr6[""].'<br/>';//a
	$arr6[5] = 'e';
	echo count($arr6).'<br/>';//4
	echo $arr6[5].'<br/>';//e
	
	echo '<br/>--------------------<br/>';	
	$arr6[5.1] = 'e.1';
	echo count($arr6).'<br/>';//4
	echo $arr6[5.1].'<br/>';//e.1
	foreach($arr6 as $key=>$val){
		echo $key.'---'.$val.'<br/>';
	};//1--1 //0--0 //---a //5---e.1
	echo $arr6[5].'<br/>';//e.1
	echo $arr6[5.1].'<br/>';//e.1
	
	echo '<br/>--------------------<br/>';	//动态增长
	$arr7 = array(1,2);
	$arr7[2] = 3;
	echo $arr7[2].'<br/>';
	echo count($arr7).'<br/>';//4
	
	echo '<br/>--------------------<br/>';	//？？？？？
	const a = 'a1';
	$arr[a] = 1;
//	echo $arr[a];//报错
	
	echo '<br/>--------------------<br/>';	
	$str = 'a b c d e f';
	$arr8 = explode(' ',$str);
	print_r($arr8);//Array ( [0] => a [1] => b [2] => c [3] => d [4] => e [5] => f )
	
	
	
	
?>