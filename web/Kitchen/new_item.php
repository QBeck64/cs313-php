<?php
include("db_connect.php");
$db = get_db();

session_start();

include("db_functions.php");

$data['newItem']    = filter_var($_POST['newItem'], FILTER_SANITIZE_STRING);
$data['type'] = filter_var($_POST['type'], FILTER_SANITIZE_STRING);
$data['newDescription']   = filter_var($_POST['newDescription'], FILTER_SANITIZE_STRING);
$data['expdate'] =  date('Y-m-d', strtotime($_POST['expdate']));
$data['quantity'] = htmlspecialchars($_POST['quantity']);
$data['storage'] = filter_var($_POST['storage'], FILTER_SANITIZE_STRING);

$itemID = insertItem($data);

$userID = $_SESSION['userID'];

$newRow = addRow($data, $itemID, $userID);


$new_page = "homepage.php";
header("Location: $new_page");
die();
?>