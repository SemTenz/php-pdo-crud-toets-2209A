<?php

include('config.php');


$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    echo "Er is een verbinding met de database";
} catch(PDOException $e) {
    echo "Er is helaas geen verbinding met de database.<br>
          Neem contact op met de Administrator<br>";
    echo "Systeemmelding: " . $e->getMessage();
}

$sql = "INSERT INTO dureauto (Id
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

$statement->bindValue(':merk', $_POST['merk'], PDO::PARAM_STR);
$statement->bindValue(':model', $_POST['model'], PDO::PARAM_STR);
$statement->bindValue(':topsnelheid', $_POST['topsnelheid'], PDO::PARAM_STR);
$statement->bindValue(':prijs', $_POST['prijs'], PDO::PARAM_STR);

$statement->execute();