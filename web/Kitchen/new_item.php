<?
include("db_connect.php");
$db = get_db();

session_start();

include("db_functions.php");

$data['newItem']    = filter_var($_POST['newItem'], FILTER_SANITIZE_STRING);
$data['type'] = filter_var($_POST['type'], FILTER_SANITIZE_STRING);
$data['newDescription']   = filter_var($_POST['newDescription'], FILTER_SANITIZE_STRING);
$data['expdate'] = filter_var($_POST['expdate'], FILTER_SANITIZE_STRING);
$data['quantity'] = filter_var($_POST['quantity'], FILTER_SANITIZE_STRING);
$data['storage'] = filter_var($_POST['storage'], FILTER_SANITIZE_STRING);

$itemID = insertItem($data);

$userID = $_SESSION['userID'];

$newRow = addRow($data, $itemID, $userID);


//header("Location: view_scriptures.php");
header("Location: homepage.php");
?>