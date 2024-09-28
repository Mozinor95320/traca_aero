<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM utilisateurs WHERE nom_utilisateur = :username OR email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username, 'email' => $username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['mot_de_passe'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['nom_utilisateur'];
        $_SESSION['message'] = 'Connexion réussie !';
        $_SESSION['message_type'] = 'success';
        header("Location: dashboard.php");
    } else {
        $_SESSION['message'] = 'Identifiants incorrects !';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php"); // Redirection vers la page d'accueil avec le message d'erreur
    }
    exit();
}
?>
