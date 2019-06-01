<?php
require "dbConnect.php";
$db = get_db();

include("db_functions.php");
$types = getTypes();

session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="kitchen.css">
</head>

<body>
    <h1>What's in the Kitchen?<h1>
<div class="topnav">
  <a class="active" href="homepage.php">Homepage</a>
  <a href="kitchenFridge.php">Kitchen Fridge</a>
  <a href="communityFridge.php">Community Fridge</a>
  <a href="pantry.php">Pantry</a>
  <a href="storageCloset.php">Storage Closet</a>
  <div class="login-container">
    <form action="verifyUser.php" method="post">
      <input type="text" placeholder="Username" name="username">
      <input type="text" placeholder="Password" name="psw">
      <button type="submit">Login</button>
    </form>
  </div>
  <p>Currently logged on:<?php echo $_SESSION["username"]?></p>
</div> 

<h1>The Kitchen</h1>


    
    </body>
    </html>