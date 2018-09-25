<!DOCTYPE html>
<html>
<head>
	<title>Test page</title>
</head>
<body>

	<h1>This is my test page</h1>

	<ul>

<?php

	for ($i = 0; $i < 100; $i++) {
		echo "<li>Hello from the other side ($i) and \$i</li>";
	}

?>

	</ul>


</body>
</html>