<?php
session_start();
require "dbConnect.php";
$db = get_db();

$userID = $_SESSION['userID'];

include("db_functions.php");




$new_page = "homepage.php";
header("Location: $new_page");
die();
?>