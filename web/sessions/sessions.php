<?php
// start the session
session_start();

// check if the session variable "visits" exists
if (isset($_SESSION["visits"])) {
	// if it does, increase it by one
	$_SESSION["visits"]++;
} else {
	// if it does not, create it and set it to one
	$_SESSION["visits"] = 1;
}

// save the value as $visit_count for use later 
$visits = $_SESSION["visits"];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

echo "You have visited $visits time(s)."

?>

</body>
</html>