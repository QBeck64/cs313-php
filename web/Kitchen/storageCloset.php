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
    $stmt = $db->prepare('SELECT * FROM inventory JOIN item ON inventory.item_id=item.id 
                        JOIN username ON inventory.username_id=username.id 
                        JOIN types ON item.types_id=types.id 
                        JOIN entitylist ON inventory.entitylist_id=entitylist.id 
                        WHERE entitylist_id=:entitylist_id');
    $stmt->bindValue(':entitylist_id', $entity, PDO::PARAM_STR);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<h2>" . $r['entity_description'] . "</h2>";
    echo "<table><th>Username</th><th>Item</th><th>Type</th><th>Expiration Date</th><th>Quantity</th><tr>";
    foreach ($rows as $r) {
        echo "<tr><td>" . $r['username_name'] . "</td><td>" . $r['item_name'] . "</td><td>" . $r['types_name'] . "</td><td>" . $r['expdate'] . "</td><td>" . $r['quantity'] . "</td></tr>";
    }

    echo "</table>";
    ?>

    </div>
    </body>
    </html>