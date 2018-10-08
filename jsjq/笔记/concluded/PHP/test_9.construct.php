<?php
	class Person{
		 public static $a = 10;
		 public function __construct(){
		  	$this->a = 1;
		 }
	};
	echo Person::$a;
	
	echo '<br/>';//10
	//这里并没有调用构造函数
	
	$b = new Person();
	echo Person::$a.'<br/>';//报错
	//这才调用了类的构造函数但没有公共的$a
?>