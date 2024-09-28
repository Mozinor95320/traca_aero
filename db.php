<?php
// Fichier: db.php

$host = "localhost";
$db = "u230474653_frettage";
$user = "u230474653_DUTERTRE";
$pass = "Parker92700";
$charset = 'utf8';



$dsn = "mysql:host=$host;dbname=$db;charset=$charset"; // DSN pour PDO

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,  // Gérer les erreurs en mode exception
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Récupérer les résultats sous forme de tableaux associatifs
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Désactiver l'émulation des requêtes préparées
];

try {
    // Création de l'instance PDO
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    // Gestion des erreurs de connexion
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}
?>
