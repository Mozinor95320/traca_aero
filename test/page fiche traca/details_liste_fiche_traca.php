<?php
// Connexion à la base de données
$conn = new mysqli('sql208.infinityfree.com', 'if0_37381207', 'M1XReMmtLU4', 'if0_37381207_traca_aero');
if ($conn->connect_error) {
    die('Erreur de connexion : ' . $conn->connect_error);
}

// Vérification si un SN est passé dans l'URL
if (isset($_GET['SN'])) {
    $sn = $_GET['SN'];

    // Requête pour récupérer toutes les informations du SN
    $sql = "SELECT * FROM FicheTraca WHERE SN = '" . $conn->real_escape_string($sn) . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
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

$conn->close();
?>
