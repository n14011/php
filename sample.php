<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	print_r($_POST);
	#echo htmlspecialchar($_POST[recipe_name],ENT_QUOTES,'UTF-8');
	#echo htmlspecialchars($_POST);
	echo "<br>";
	if ($_POST['category'] == '1') echo "和食";
	if ($_PSOT['category'] == '2') echo "中華";
	if ($_POST['category'] == '3') echo "洋食";
	echo "<br>";
	?>
</body>
</html>
