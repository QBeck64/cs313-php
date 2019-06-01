<?php
$user = htmlspecialchars($_POST['username']);
$psw = htmlspecialchars($_POST['psw']);
require('dbConnect.php');
$db = get_db();
$stmt = $db->prepare('INSERT INTO note(course_id, content) VALUES (:course_id, :content);');
$stmt->bindValue(':course_id', $course_id, PDO::PARAM_INT);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$stmt->execute();
$new_page = "homepage.php?user=$username";
header("Location: $new_page");
die();
?>