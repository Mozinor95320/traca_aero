<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    $_SESSION['message'] = 'Vous devez être connecté pour accéder à cette page.';
    $_SESSION['message_type'] = 'danger';
    header("Location: index.php"); // Rediriger vers la page de connexion si non connecté
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Bienvenue, <?php echo $_SESSION['username']; ?> !</h1>
        <p>Vous êtes connecté au tableau de bord.</p>
        <a href="logout.php" class="btn btn-danger">Se déconnecter</a>
    </div>
</body>

</html>
