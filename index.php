<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FicheTraca</title>
    <!-- Inclusion de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Inclusion de Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="github/liste_fiche_traca.css">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Recherche par SN</h1>

    <!-- Barre de recherche -->
    <form id="search-form" method="GET" action="" class="mb-4">
        <div class="input-group">
            <input type="text" id="search-input" name="search-sn" class="form-control" placeholder="Rechercher un SN" required>
            <button class="btn btn-primary" type="submit">Rechercher</button>
        </div>
    </form>

    <!-- Résultats de la recherche -->
    <div id="result-container">
        <?php
        // Inclusion de la connexion PDO
        require 'github/db.php';

        // Vérification si un SN est soumis via le formulaire
        $searchSN = isset($_GET['search-sn']) ? $_GET['search-sn'] : '';

        // Requête SQL de base
        $sql = "SELECT SN, DateCreationFiche FROM FicheTraca";
        
        // Si un SN est soumis, on filtre la requête
        if (!empty($searchSN)) {
            $sql .= " WHERE SN LIKE :searchSN";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['searchSN' => "%$searchSN%"]);
        } else {
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        }

        // Récupération des résultats
        $rows = $stmt->fetchAll();

        if (count($rows) > 0) {
            // Affichage des résultats
            foreach ($rows as $row) {
                echo '<div class="card mb-3">';
                echo '<div class="card-body d-flex justify-content-between align-items-center">';
                echo '<div>';
                echo '<h5 class="card-title fw-bold">' . $row['SN'] . '</h5>';
                echo '<p class="card-text text-muted">' . $row['DateCreationFiche'] . '</p>';
                echo '</div>';
                echo '<a href="github/details.php?SN=' . $row['SN'] . '" class="btn btn-outline-primary">';
                echo '<i class="bi bi-folder2-open" style="font-size: 24px;"></i>'; // Icône de dossier ouvert
                echo '</a>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "<p>Aucun résultat trouvé pour le SN : $searchSN</p>";
        }
        ?>
    </div>
</div>

<!-- Inclusion de Bootstrap JS et de son bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
