<!DOCTYPE html>
<html>
    <head>
        <title>Week05 Team Activity</title>
        <h1>Scripture Resources</h1>
    </head>
    <body>
    <?php
        try
            {
            $dbUrl = getenv('DATABASE_URL');

            $dbOpts = parse_url($dbUrl);

            $dbHost = $dbOpts["host"];
            $dbPort = $dbOpts["port"];
            $dbUser = $dbOpts["user"];
            $dbPassword = $dbOpts["pass"];
            $dbName = ltrim($dbOpts["path"],'/');

            $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        catch (PDOException $ex)
            {
            echo 'Error!: ' . $ex->getMessage();
            die();
            }
    ?>
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
    </body>
</html>