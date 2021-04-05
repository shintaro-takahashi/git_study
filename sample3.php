<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>サンプル3</title>
</head>
<body>
<?php
for ($i = 1; $i <= 50; $i++) {
	echo $i;
	if ($i % 6 == 0 || strstr($i, '6')) {
		echo 'たかはし';
	}
	echo '<br>';
}
?>
</body>
</html>
