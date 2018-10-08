<?php
	$url = array('baidu','taobao','tengxun');
	echo $url[0].'<br/>';
	echo $url[1].'<br/>';
	echo $url[2].'<br/>';
	echo '<hr/>';

	class a{
		public $url1 = 'baidu.com';
		function say(){
			echo '<br/>hello world';
		}
	}
	$obj = new a();
	echo $obj->url1;
	echo $obj->say();
	echo '<hr/>';
	
	$huluwa = array('大葫芦娃','2葫芦娃','3葫芦娃','4葫芦娃','5葫芦娃','6葫芦娃','7葫芦娃');
	if( is_array($huluwa) ){
		foreach($huluwa as $key => $value){
			echo 'no.'.($key+1).'--- 名字 ---'.$value.'<br/>';
		}
	}








?>