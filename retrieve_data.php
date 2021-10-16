<?php
    require_once "database.php";




$statement = $pdo->prepare('SELECT user FROM users');
$statement->execute();

$value = $statement->fetchAll(PDO::FETCH_ASSOC);

print_r ($value);
