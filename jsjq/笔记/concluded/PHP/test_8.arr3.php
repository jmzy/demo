<!DOCTYPE html>
<html>
<head>
	<title>数组测试3</title>
	<meta charset="utf-8"/>
	<style>
		input[type="text"]{width: 220px;}
	</style>
</head>
<body>
	<?php
		$arr = array(50,66,90,100,99,55,61,78,88,58,61);
		$keyNum = null;
		$keyVal = null;
	?>
	<form action="test.8.arr3.php" method="post">
		<p>
			数组：<input type="text" name="arr"
			value="<?php
				for($i=0;$i<count($arr);$i++){
					echo $arr[$i].',';
				};
			?>"/>
		</p>
		<p>
			查询数组下标的值：<input type="text" name="keyNum" value="请输入需要查询数组的下标" />
		</p>
		<p>
			查询数组值的下标：<input type="text" name="keyVal" value="请输入需要查询数组的值" />
		</p>
		<p>
			<input type="submit" name="submit" id="submit" value="查询提交" />
		</p>
		<p>
			<?php
				$keyNum = $_REQUEST['keyNum'];
				$keyVal = $_REQUEST['keyVal'];
				function getKeyNum($arr,$keyNum){
					return $arr[$keyNum];
				};
				function getKeyVal($arr,$keyVal){
					for($i=0;$i<count($arr);$i++){
						if($arr[$i] == $keyVal){
							return $i;
						}
					};
				};
				echo '下标'.$keyNum.'--的值为'.getKeyNum($arr,$keyNum).'<br/>';
				echo '值为'.$keyVal.'--的下标为'.getKeyVal($arr,$keyVal).'<br/>';
				
				
			?>
		</p>
	</form>

</body>
</html>

