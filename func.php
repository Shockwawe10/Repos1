<?php

function getAllDb($db) {

    $sql = "SELECT * FROM films_1";
    $result = array();

    $stmt = $db->prepare($sql);
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $result[$row['Number']] = $row;
        }     
    return $result;        
}


function deleteRecord($db,$id) {

    $sql = "DELETE FROM films_1 WHERE Number = $id";

    $stmt = $db->prepare($sql);

    $stmt->execute();
};


?>