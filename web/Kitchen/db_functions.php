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

function insertItem($data) {
    global $db;
    $query = "INSERT INTO item
        (name, types_id, item_description)
        VALUES (:name, :types_id, :description)";
    $statement = $db->prepare($query);
    $statement->bindValue(':name',$data['newItem']);
    $statement->bindValue(':types_id',$data['type']);
    $statement->bindValue(':item_description',$data['newDescription']);
    $statement->execute();
    $statement->closeCursor();
    return $db->lastInsertId();
}

function addRow($data, $itemID, $userID){
    global $db;
    $query = "INSERT INTO inventory
        (username_id, item_id, expdate, quantity, entitylist_id)
        VALUES (:username_id, :item_id, :expdate, :quantity, :entitylist_id)";
    $statement = $db->prepare($query);
    $statement->bindValue(':username_id',$userID);
    $statement->bindValue(':item_id',$itemID);
    $statement->bindValue(':expdate',$data['expdate']);
    $statement->bindValue(':quantity',$data['quantity']);
    $statement->bindValue(':entitylist_id',$data['storage']);
    $statement->execute();
    $statement->closeCursor();
    return $db->lastInsertId();
}

?>