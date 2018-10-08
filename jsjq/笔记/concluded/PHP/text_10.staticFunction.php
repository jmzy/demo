<?php
	class student{
		public static $fee = 0;
		public $name;
		
		function __construct($name){
			$this->name = $name;
		}
		
		public static function enterSchool($ifee){
			self::$fee += $ifee;
		}
		
		public static function getFee(){
			return self::$fee;
		}
	}
	
	
	$stu1 = new student('aa');
	$stu1 -> enterSchool(320);
	
	$stu2 = new student("bb");
	$stu2 ->enterSchool(330);

	echo "总学费".$stu1::$fee.'<br/>';
//	echo "总学费".$stu2->$fee.'<br/>'; //报错
	echo "总学费".student::getFee().'<br/>';
?>