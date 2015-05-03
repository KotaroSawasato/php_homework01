<html>
<head>
	<meta charset='UTF-8'>
</head>
<body>
	<form method='post' action='02.php'>
		学校名：<input type='text' name='school_name'/>
		<input type='hidden' name='data01' value='<?php echo $_POST['school_name']; ?>'/>
		<input type='submit'/>
	</form>
	<hr />
</body>
</html>
