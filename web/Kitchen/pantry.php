<?php
require "dbConnect.php";
$db = get_db();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pantry</title>
</head>

<body>
<div class="topnav">
  <a href="homepage.php">Homepage</a>
  <a href="kitchenFridge.php">Kitchen Fridge</a>
  <a href="communityFridge.php">Community Fridge</a>
  <a class="active" href="pantry.php">Pantry</a>
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