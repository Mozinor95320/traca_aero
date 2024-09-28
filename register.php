<?php
require 'config.php'; // Inclure la configuration de la base de données

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Vérification que les mots de passe correspondent
    if ($password !== $confirm_password) {
        echo "Les mots de passe ne correspondent pas.";
        exit();
    }

    // Vérifier si le nom d'utilisateur ou l'email existe déjà
    $sql = "SELECT * FROM utilisateurs WHERE nom_utilisateur = :username OR email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username, 'email' => $email]);
    $user = $stmt->fetch();

    if ($user) {
        echo "Nom d'utilisateur ou email déjà utilisé.";
        exit();
    }

    // Hash du mot de passe
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insertion du nouvel utilisateur
    $sql = "INSERT INTO utilisateurs (nom_utilisateur, email, mot_de_passe) VALUES (:username, :email, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'username' => $username,
        'email' => $email,
        'password' => $hashed_password
    ]);

    echo "Compte créé avec succès ! Vous pouvez maintenant vous connecter.";
}
?>
