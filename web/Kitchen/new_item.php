<?php
include("db_connect.php");
$db = get_db();

session_start();




$new_page = "homepage.php";
header("Location: $new_page");
die();
?>