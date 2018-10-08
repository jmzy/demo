<?php
	$url = 'http://www.baidu.com/admin/index.php?m=channel&a=add';
	$arr = parse_url($url);
	echo '<pre>';
	print_r($arr);
	/*
	 * Array
		(
		    [scheme] => http
		    [host] => www.baidu.com
		    [path] => /admin/index.php
		    [query] => m=channel&a=add
		)
	 */
	
	echo '<br/>';
	echo parse_url($url,PHP_URL_SCHEME).'<br/>';
	echo parse_url($url,PHP_URL_HOST).'<br/>';
	echo parse_url($url,PHP_URL_PATH).'<br/>';
	echo parse_url($url,PHP_URL_QUERY).'<br/>';

	echo '<br/>-----------------------<br/>';
	$str = "字符串测试3$test变量";
	echo "<a href='test_7.str3.php?a={urlencode($str)}'>测试</a>".'<br/>';
	echo $_GET['a'];
	//报了两个错
	
	echo '<br/>-----------------------<br/>';
	$str2 = '百度1下你就知道';
	echo urlencode($str2).'<br/>';					//%E2%80%98%E7%99%BE%E5%BA%A61%E4%B8%8B%E4%BD%A0%E5%B0%B1%E7%9F%A5%E9%81%93%E2%80%99
	echo urldecode(urlencode($str2));				//‘百度1下你就知道’

	echo '<br/>-----------------------<br/>';
	$str3 = '<h2>百度两下</h2>';
	echo $str3.'<br/>';
	echo htmlentities($str3).'<br/>';
	$str4 = 'www.baidu.com"PHP div"';
	echo $str4.'<br/>';
	echo htmlentities($str4).'<br/>';				//页面默认不显示效果、得看源码 < 会换成 &lt;
?>












