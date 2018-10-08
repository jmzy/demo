<?php
	
	echo "<table>";
	$i = 1;
	while($i <= 9){
		echo "<tr>";
		$j = 1;
		while($j <= $i){
			if($i%2 > 0){
				echo "<td style='background:skyblue'>";
			}else{
				echo "<td style='background:#f08'>";
			};
//			
//			if($j%2 >0){
//				echo "<td style='background:red'>";
//			}else{
//				echo "<td style='background:white'>";
//			};
//			
			echo " ".$i.'*'.$j.'='.$i*$j."&nbsp;&nbsp;&nbsp;";
			//\t水平制表(HT) （跳到下一个TAB位置）
			echo "</td>";
			$j++;//先执行后++
		};
		echo "</tr>";
		$i++;//先执行后++
	};
	echo "</table>";
	echo "--------------------------<br/><br/><br/>";
	
	while($a++ < 10){
		echo '$a = '.$a."<br/>";
		while($b++ < 5){
			echo '★$b = '.$b."<br/>";
		}
	}
	
	echo "--------------------------<br/><br/><br/>";
	$i = 1;
	while($i++<a){
		echo "$i == {$i}";
	}
	
	
	
	echo "<br/><br/><br/>";
	$i = 0;
	$j = 0;
	while($i++ < 10){
		echo '$i = '.$i;
		while($j++ <5){
			if($j == 2){
				break 2;
			}
			echo '  $j = '.$j;
		}
		echo '<br/>';
	}
	
	
	
	echo "<br/>--------------<br/><br/><br/>";
	$a = 0;
	$b = 0;

	while(++$a < 3){
		while(++$b < 4){
			if($b == 2){
				echo '&nbsp;&nbsp;$b:'.$b;
			}
		}
		$b = 0;
		echo '$a:'.$a;
		echo '<br/>';
	};
?>