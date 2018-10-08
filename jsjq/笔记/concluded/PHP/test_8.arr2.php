<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8"/>
	<title>数组简单应该</title>
</head>
<body>
	<form action="test.8.arr2.php" method="post">
		输入层数:<input type="text" name="layer" />
		<br/>
		选择形状:<select name="shape">
			<option value="a">矩形</option>
			<option value="b">半金字塔</option>
		</select>
		<br/>
		<input type="submit" value="提交"/>
	</form>
</body>
</html>

<?php
	$n = $_REQUEST['layer']; 
	$shape = $_REQUEST['shape'];
	$starNum = 5;
	function printShape($n,$shape,$starNum){
		switch($shape){
			case 'a':
				for($i=1;$i<=$n;$i++){
					for($j=1;$j<=$starNum;$j++){
						echo '*';
					};
					echo '<br/>';
				};
				break;
				
			case 'b':
				for($i=1;$i<=$n;$i++){
					for($j=1;$j<=$i;$j++){
						echo '*';
					};
					echo '<br/>';
				};
				break;
				
			case 'c':
				for($i=1;$i<=$n;$i++){
					for($j=1;$j<=$i;$j++){
						echo '*';
					};
					echo '<br/>';
				};
				break;
		};
	};
	printShape($n,$shape,$starNum);
	
?>