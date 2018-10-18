<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="addToCart.php" method="post">
	<ul>
		<li>Sleeping Bag <input type="checkbox" name="products[]" value="sleepingBag"></li>
		<li>Tent <input type="checkbox" name="products[]" value="tent"></li>
		<li>Flashlight <input type="checkbox" name="products[]" value="Flashlight"></li>
	</ul>

	<input type="submit" value="Add To Cart">
	</form>

</body>
</html>