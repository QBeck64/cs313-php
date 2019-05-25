<?php
require "dbConnect.php";
$db = get_db();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Scripture List</title>
</head>

<body>
<div>

<h1>Scripture Resources</h1>

<?php
    foreach ($db->query('SELECT * FROM inventory') as $row)
    {
      echo "<p><span>" . $row['username_id'] . ' ';
      echo $row['item_id'];
      echo ':' . $row['expDate'] . ' - ' . "</span>";
      echo '"' . $row['quantity'] . $row['entitylist_id'] . '"' . "</p>";
      echo '<br/>';
    }
    ?>

    </div>
    </body>
    </html>