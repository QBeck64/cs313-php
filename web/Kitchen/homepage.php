<?php
require "dbConnect.php";
$db = get_db();

?>

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