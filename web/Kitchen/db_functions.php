<?
function getTypes() {
    global $db;
    $query = "SELECT * FROM types
        ORDER BY name";
    $statement = $db->prepare($query);
    $statement->execute();
    $types = $statement->fetchAll();
    $statement->closeCursor();
    return $types;
}

function getStorage() {

}

?>