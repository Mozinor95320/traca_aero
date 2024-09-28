<?php
session_start();
require 'github/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    if ($password !== $confirm_password) {
        $_SESSION['message'] = 'Les mots de passe ne correspondent pas.';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
        exit();
    }

    $sql = "SELECT * FROM utilisateurs WHERE nom_utilisateur = :username OR email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username, 'email' => $email]);
    $existing_user = $stmt->fetch();

    if ($existing_user) {
        $_SESSION['message'] = 'Le nom d\'utilisateur ou l\'email est déjà utilisé.';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
        exit();
    }

    // Hachage du mot de passe
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insertion dans la base de données
    $sql = "INSERT INTO utilisateurs (nom_utilisateur, email, mot_de_passe) VALUES (:username, :email, :password)";
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute(['username' => $username, 'email' => $email, 'password' => $hashed_password]);

    if ($result) {
        $_SESSION['message'] = 'Compte créé avec succès ! Vous pouvez maintenant vous connecter.';
        $_SESSION['message_type'] = 'success';
        header("Location: index.php");
    } else {
        $_SESSION['message'] = 'Erreur lors de la création du compte. Veuillez réessayer.';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
    }
    exit();
}
?>

