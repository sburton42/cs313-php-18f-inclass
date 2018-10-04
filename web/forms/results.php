<?php

$username = htmlspecialchars($_GET["username"]);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Welcome user: <?php echo $username; ?></h1>

<?php
var_dump($_REQUEST);

?>

</body>
</html>