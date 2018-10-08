<form action="" mothod='get'>
	姓名：<input type="text" name='uname' /><br/>
	<input type="submit" value="提交" />
</form>

<?php
//	echo htmlspecialchars($_GET['uname']);			//<script>alert(1)</script>
	echo $_GET['uname'];
	//--------------报错
?>