<html>
<head>
	<meta charset='UTF-8'>
</head>
<body>
	<form method='post' action='06.php'>
		学年：<SELECT name="grade">
		<OPTION value="B1">B1</OPTION>
		<OPTION value="B2">B2</OPTION>
		<OPTION value="B3">B3</OPTION>
		<OPTION value="B4">B4</OPTION>
		<OPTION value="M1">M1</OPTION>
		<OPTION value="M2">M2</OPTION>
		<input type='hidden' name='data01' value="<?php echo $_POST['data01'];?>">
		<input type='hidden' name='data02' value="<?php echo $_POST['data02'];?>">
		<input type='hidden' name='data03' value="<?php echo $_POST['data03'];?>">
		<input type='hidden' name='data06' value="<?php echo $_POST['data06'];?>">
		<input type="hidden" name='data04' value="<?php echo $_POST['sex'];?>">
		<input type='submit'>
	</form>
	<hr />
</body>
</html>
