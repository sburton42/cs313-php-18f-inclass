<?php

session_start();

$products = $_POST["products"];

if (!isset($_SESSION["cart"])) {

	$_SESSION["cart"] = ???
}

foreach ($products as $product) {
	$_SESSION["cart"]
}

?><html>

<body>

<p>You have added the following to the cart:</p>	
<?php


foreach ($products as $product) {
	echo "$product<br>";
}

?>

</body>


</html>