<?php
    echo 'Het meegestuurde Id = ' . $_GET['Id'];

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

$statement->bindValue(':Id', $_GET['Id'], PDO::PARAM_INT);

$result = $statement->execute();

if ($result) {
    echo "Het record is verwijderd";
    header('Refresh:2.5; url=read.php');
} else {
    echo "Het record is niet verwijderd";
}