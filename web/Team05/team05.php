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
            $dbUrl = getenv('postgres://xxkksjownvplid:b77f00d668e22a7da11dada4ff9389a010d65c5bdc90242410af0da0ca121c0e@ec2-54-221-243-211.compute-1.amazonaws.com:5432/d7hrvj4dtkji6b');

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
    </body>
</html>