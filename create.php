<?php
// var_dump($_POST);exit();
include('config.php');

// DSN staat voor data sourcename.
$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    echo "Er is een verbinding met de database";
} catch(PDOException $e) {
    echo "Er is helaas geen verbinding met de database.<br>
          Neem contact op met de Administrator<br>";
    echo "Systeemmelding: " . $e->getMessage();
}
// Maak de sql query voor het inserten van een record
$sql = "INSERT INTO Persoon (Id
                            ,Merk   
                            ,Model
                            ,Topsnelheid
                            ,Prijs)
        VALUES              (NULL
                            ,:merk
                            ,:model
                            ,:topsnelheid
                            ,:prijs);";

$statement = $pdo->prepare($sql);

$statement->execute();