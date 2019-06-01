<?php
$user = htmlspecialchars($_POST['username']);
$psw = htmlspecialchars($_POST['psw']);

require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare('SELECT * FROM username WHERE username_name=$username');
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//$stmt->execute();

$new_page = "homepage.php";
header("Location: $new_page");
die();
?>