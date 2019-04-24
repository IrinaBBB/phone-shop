<?php


try {
    $db = new PDO('mysql:host=localhost;dbname=phone_shop;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    $output = 'Unable to connect to the databae server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
    exit();
}
