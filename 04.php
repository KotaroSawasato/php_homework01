<html>
<head>
	<meta charset='UTF-8'>
</head>
<body>
	<form method='post' action='05.php'>
		性別：<input type="radio" name="sex" value="男" checked="checked">男
		<input type="radio" name="sex" value="女">女
		<input type='hidden' name='data01' value="<?php echo $_POST['data01'];?>">
		<input type='hidden' name='data02' value="<?php echo $_POST['data02'];?>">
		<input type='hidden' name='data03' value="<?php echo $_POST['user_name'];?>">
		<input type='hidden' name='data06' value="<?php echo $_POST['comment'];?>">
		<input type='submit'>
	</form>
	<hr />
</body>
</html>
