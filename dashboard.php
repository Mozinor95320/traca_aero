<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Rediriger vers la page de connexion si non connecté
    exit();
}

echo "Bienvenue " . $_SESSION['username'] . " ! Vous êtes connecté.";
?>
