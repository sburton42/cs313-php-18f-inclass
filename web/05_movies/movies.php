<?php
// connect to db
require('dbConnect.php');
$db = get_db();

// query for all movies
// $stmt = $db->prepare('SELECT * FROM table WHERE id=:id AND name=:name');
// $stmt->bindValue(':id', $id, PDO::PARAM_INT);
// $stmt->bindValue(':name', $name, PDO::PARAM_STR);
// $stmt->execute();
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = $db->prepare('SELECT id, title, year FROM movie');
$stmt->execute();
$movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

// go through each movie in the result and display it

?>
<!DOCTYPE html>
<html>
<head>
	<title>Movies</title>
</head>
<body>

	<h1>Movies</h1>

	<ul>
<?php
foreach ($movies as $movie) {
	$title = $movie['title'];
	$year = $movie['year'];
	echo "<li><p><a href='movieDetails.php?movie_id=$id'>$title ($year)</a></p></li>";
}
?>
	</ul>

</body>
</html>