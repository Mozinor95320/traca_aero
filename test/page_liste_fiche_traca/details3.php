<?php
// Inclusion de la connexion PDO
require 'db.php';

// Vérification si un SN est passé dans l'URL
if (isset($_GET['SN'])) {
    $sn = $_GET['SN'];

    // Requête pour récupérer toutes les informations du SN
    $sql = "SELECT * FROM FicheTraca WHERE SN = :sn";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['sn' => $sn]);

    // Vérification si des résultats sont retournés
    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch();
        ?>
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Détails SN <?php echo $row['SN']; ?></title>
            <!-- Bootstrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>
        <div class="container mt-5">
            <h1 class="mb-4">Détails du SN : <?php echo $row['SN']; ?></h1>
            <ul class="list-group">
                <li class="list-group-item"><strong>Date de création :</strong> <?php echo $row['DateCreationFiche']; ?></li>
                <li class="list-group-item"><strong>SN Bobine :</strong> <?php echo $row['SNBobine']; ?></li>
                <li class="list-group-item"><strong>Lot Bobine :</strong> <?php echo $row['LotBobine']; ?></li>
                <!-- Afficher les autres colonnes ici -->
            </ul>
            <a href="index.php" class="btn btn-primary mt-3">Retour</a>
        </div>
        </body>
        </html>
        <?php
    } else {
        echo '<p>Aucune fiche trouvée pour ce SN.</p>';
    }
} else {
    echo '<p>SN non spécifié.</p>';
}
?>