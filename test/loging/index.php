<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Connexion / Création de Compte</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container mt-5">
        <!-- Affichage des messages d'erreur ou de succès -->
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?php echo $_SESSION['message_type']; ?>">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']); // Suppression du message après l'affichage
                unset($_SESSION['message_type']);
                ?>
            </div>
        <?php endif; ?>

        <!-- Tabs for switching between login and register -->
        <ul class="nav nav-tabs" id="authTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Connexion</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Créer un Compte</button>
            </li>
        </ul>

        <div class="tab-content mt-4" id="authTabContent">
            <!-- Login Form -->
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                <form id="loginForm" action="login.php" method="POST">
                    <div class="mb-3">
                        <label for="login-username" class="form-label">Nom d'utilisateur ou Email</label>
                        <input type="text" class="form-control" id="login-username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="login-password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="login-password" name="password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </form>
            </div>

            <!-- Registration Form -->
            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                <form id="registerForm" action="github/register.php" method="POST">
                    <div class="mb-3">
                        <label for="register-username" class="form-label">Nom d'utilisateur</label>
                        <input type="text" class="form-control" id="register-username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="register-email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="register-email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="register-password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="register-password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="register-confirm-password" class="form-label">Confirmer le mot de passe</label>
                        <input type="password" class="form-control" id="register-confirm-password" name="confirm_password" required>
                    </div>
                    <button type="submit" class="btn btn-success">Créer un Compte</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript for basic validation -->
    <script src="scripts.js"></script>
</body>

</html>
