<html>
<head>
	<meta charset='UTF-8'>
	<?php

	$data02=$_POST['student_number'];

	preg_match('/^[0-9]{10}$/',"$data02",$m);

	
	if($m[0] !== $data02){ ?>
	<FONT color="red">学籍番号は数字で入力してください。10秒後に最初のページへ移動します。</FONT><br>
	<meta http-equiv="refresh" content="10;URL=../php_homework01/01.php">
	<?php } ?>
	
</head>
<body>
	<form method='post' action='04.php'>
		名前：<input type='text' name='user_name'><br>
		自己紹介：<br><textarea cols="40" rows="6" name="comment"></textarea>
		<input type='hidden' name='data01' value="<?php echo $_POST['data01'];?>">
		<input type='hidden' name='data02' value="<?php echo $_POST['student_number'];?>">
		<input type='submit'>
	</form>
	<hr />
</body>
</html>
