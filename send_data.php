<?php
    require_once "database.php";
    $user = $_GET['user'] ?? null;

    $statement = $pdo->prepare('UPDATE loginform SET user = :user');
    $statement->bindValue(':user', $user);
    $statement->execute();

