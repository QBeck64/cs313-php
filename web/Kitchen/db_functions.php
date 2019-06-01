<?
function getTypes() {
    global $db;
    $query = "SELECT * FROM types
        ORDER BY types_name";
    $statement = $db->prepare($query);
    $statement->execute();
    $types = $statement->fetchAll();
    $statement->closeCursor();
    return $types;
}

function getStorage() {
    global $db;
    $query = "SELECT * FROM entitylist
        ORDER BY storage";
    $statement = $db->prepare($query);
    $statement->execute();
    $entity = $statement->fetchAll();
    $statement->closeCursor();
    return $entity;
}

?>