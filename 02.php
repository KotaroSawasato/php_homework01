<html>
<head>
	<meta charset='UTF-8'>
</head>
<body>
	

	<form method='post' action='03.php'>
		学籍番号：<input type="text" name="student_number">
		<input type="hidden" name="data01" value="<?php echo $_POST['school_name']; ?>">
		<input type='submit'>
	</form>
	<hr />
</body>
</html>
