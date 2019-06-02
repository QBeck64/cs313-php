<?php

session_start();

$user = htmlspecialchars($_POST['username']);
$psw = htmlspecialchars($_POST['psw']);

require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare('SELECT * FROM username WHERE username_name=:user AND password=:psw');
$stmt->bindvalue(':user', $user, PDO::PARAM_STR);
$stmt->bindvalue(':psw', $psw, PDO::PARAM_STR);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $r) {
    if ($r['username_name']=$user AND $r['password']=$psw) {
        $_SESSION['username'] = $r['username_name'];
        $_SESSION['userID'] = $r['id'];
    }
}

$new_page = "homepage.php";
header("Location: $new_page");
die();
?>