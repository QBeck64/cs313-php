<?php
require "dbConnect.php";
$db = get_db();

include("db_functions.php");


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

<?php
    $stmt = $db->prepare('SELECT * FROM inventory JOIN item ON inventory.item_id=item.id 
                        JOIN username ON inventory.username_id=username.id 
                        JOIN types ON item.types_id=types.id 
                        JOIN entitylist ON inventory.entitylist_id=entitylist.id');
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<table><th>Username</th><th>Item</th><th>Type</th><th>Expiration Date</th><th>Quantity</th><th>Storage Location</th<tr>";
    foreach ($rows as $r) {
        echo "<tr><td>" . $r['username_name'] . "</td><td>" . $r['item_name'] . "</td><td>" . $r['types_name'] . "</td><td>" . $r['expdate'] . "</td><td>" . $r['quantity'] . "</td><td>" . $r['storage'] . "</tr>";
    }

    echo "</table>";
    
    ?>
    <div class="Input-container">
        <form action="new_item.php" method="post">
        <input type="text" placeholder="Item Name" name="newItem">
        <select name="type">
        <?php
         $types = getTypes();
         foreach($types as $t) {
             echo "option value=" . $t['types_name'] . ">" . $t['types_name'] . "</option";
         }
        ?>
        </select>
    </div>
    <?php
    

    $storage = getStorage();
    foreach($storage as $s) {
        echo $s["storage"];
    }
    ?>
    
    </body>
    </html>