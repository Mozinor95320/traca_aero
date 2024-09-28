<?php
session_start();
require 'config.php'; // Inclure la configuration de la base de données

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Préparation de la requête pour chercher l'utilisateur par nom d'utilisateur ou email
    $sql = "SELECT * FROM utilisateurs WHERE nom_utilisateur = :username OR email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username, 'email' => $username]);
    $user = $stmt->fetch();

    // Vérification si l'utilisateur existe et si le mot de passe est correct
    if ($user && password_verify($password, $user['mot_de_passe'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['nom_utilisateur'];
        header("Location: dashboard.php"); // Redirection vers une page protégée
        exit();
    } else {
        echo "Identifiants incorrects !";
    }
}
?>
