<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Number1To20</title>
</head>
<body>
<ul>
	<span style='color: blue'></span>
	<span style='color: green'></span>
	<span style='color: blue'></span>
</ul>
<ul>
<?php
for($i=1;$i <=20;$i++){
	if($i % 2 == 0) {
		$color = 'green';
	}
		else {
			$color = 'blue';
		}
	echo "\t<li><span style='color:$color'>$i</span></li>\n";
}
?>
	</ul>
</body>
</html>