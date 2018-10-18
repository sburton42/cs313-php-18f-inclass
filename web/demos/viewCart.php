<?php

session_start();


?>
<html>

<?php

$items = $_SESSION["cart"];

for ($items as $item) {
	echo $item
}

?>


</html>