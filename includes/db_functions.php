<?php
include __DIR__ . '/db_connection.php';


/* CATEGORIES */

function getAllCategories() {
    global $db;
    $query = 'SELECT * FROM `categories` ORDER BY `id`';

    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    return $result;
}


function getOneCategory($id) {
    global $db;
    $query = 'SELECT * FROM `categories` WHERE `id` = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    return $result;
}


/* PRODUCTS */

function getProductsByCatId($cat_id) {
    global $db;
    $query = 'SELECT * FROM `products` WHERE `cat_id` = :cat_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':cat_id', $cat_id);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    return $result;
}







