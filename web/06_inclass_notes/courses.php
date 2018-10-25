<?php

require('dbConnect.php');

$db = get_db();

$query = 'SELECT id, code, name FROM course';

$stmt = $db->prepare($query);
$stmt->execute();
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Courses</title>
</head>
<body>
	<h1>Courses</h1>

	<ul>
<?php
foreach ($courses as $course) {
	$id = $course['id'];
	$name = $course['name'];
	$code = $course['code'];

	echo "<li><p><a href='notes.php?id=$id'>$code - $name</a></p></li>\n";

}
?>

	</ul>

</body>
</html>