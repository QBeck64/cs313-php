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