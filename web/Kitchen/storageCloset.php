<?php
require "dbConnect.php";
$db = get_db();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Storage Closet</title>
    <link rel="stylesheet" type="text/css" href="kitchen.css">
</head>

<body>
<div class="topnav">
  <a href="homepage.php">Homepage</a>
  <a href="kitchenFridge.php">Kitchen Fridge</a>
  <a href="communityFridge.php">Community Fridge</a>
  <a href="pantry.php">Pantry</a>
  <a class="active" href="storageCloset.php">Storage Closet</a>
</div> 

<h1>Scripture Resources</h1>

<?php
    $entity = "8";
    $stmt = $db->prepare('SELECT * FROM inventory WHERE entitylist_id=:entitylist_id');
    $stmt->bindValue(':entitylist_id', $entity, PDO::PARAM_STR);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $r) {
        $db->prepare('SELECT * FROM username WHERE id=:id');
    }
    ?>

    </div>
    </body>
    </html>