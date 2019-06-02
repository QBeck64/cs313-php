<?php
session_start();



$new_page = "homepage.php";
header("Location: $new_page");
die();
?>