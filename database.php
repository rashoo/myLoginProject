<?php

try {
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=loginform', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Cannot connect to the database");
}



