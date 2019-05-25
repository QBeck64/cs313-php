<?php
require "dbConnect.php";
$db = get_db();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Community Fridge</title>
    <link rel="stylesheet" type="text/css" href="kitchen.css">
</head>

<body>
<div class="topnav">
  <a href="homepage.php">Homepage</a>
  <a href="kitchenFridge.php">Kitchen Fridge</a>
  <a class="active" href="communityFridge.php">Community Fridge</a>
  <a href="pantry.php">Pantry</a>
  <a href="storageCloset.php">Storage Closet</a>
</div> 

<h1>Scripture Resources</h1>

<?php
    foreach ($db->query('SELECT * FROM scriptures') as $row)
    {
      echo "<p><span>" . $row['book'] . ' ';
      echo $row['chapter'];
      echo ':' . $row['verse'] . ' - ' . "</span>";
      echo '"' . $row['content'] . '"' . "</p>";
      echo '<br/>';
    }
    ?>

    </div>
    </body>
    </html>