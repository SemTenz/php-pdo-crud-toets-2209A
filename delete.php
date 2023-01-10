<?php

require('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
       
    } else {
        echo "Interne server-error";
    }
} catch (PDOException $e) {
    $e->getMessage();
}

$sql = "DELETE FROM dureauto
        WHERE Id = :Id;";

$statement = $pdo->prepare($sql);


$statement->execute([
    ':Id' => $_GET["Id"]
]);
    echo "Het record is verwijderd";
    header('Refresh:2.5; url=read.php');
