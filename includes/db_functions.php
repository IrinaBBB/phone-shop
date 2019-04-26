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


function getOneCategory($id)
{
    global $db;
    $query = 'SELECT * FROM `categories` WHERE `id` = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    return $result;
}

function getCategoryByProductId($prod_id) {
    global $db;
    $query = 'SELECT * FROM `categories` WHERE `id` = :prod_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':prod_id', $prod_id);
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

function getAllProducts() {
    global $db;
    $query = 'SELECT * FROM `products`';

    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    return $result;
}

function getProductIds() {
    global $db;
    $query = 'SELECT `id` FROM `products`';

    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    return $result;

}

function getProductById($id) {
    global $db;
    $query = 'SELECT * FROM `products` WHERE `id` = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    return $result;
}






