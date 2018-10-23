<?php

$course_id = htmlspecialchars($_POST['course_id']);
$content = htmlspecialchars($_POST['note_content']);

echo "$course_id\n";
echo $content;

?>