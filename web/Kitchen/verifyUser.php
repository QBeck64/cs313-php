<?php
$user = htmlspecialchars($_POST['username']);
$psw = htmlspecialchars($_POST['psw']);

require('dbConnect.php');
$db = get_db();



$new_page = "homepage.php";
header("Location: $new_page");
die();
?>