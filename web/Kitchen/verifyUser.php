<?php
$user = htmlspecialchars($_POST['username']);
$psw = htmlspecialchars($_POST['psw']);

require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare('SELECT * FROM username WHERE username_name=:user AND password=:psw');
$stmt->bindvalue(':user', $user, PDO::PARAM_STR);
$stmt->bindvalue(':psw', $psw, PDO::PARAM_STR);
$stmt->execute();

$new_page = "homepage.php";
header("Location: $new_page");
die();
?>