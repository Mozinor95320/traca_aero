<?php
// Connexion à la base de données
$host = 'localhost'; // Hôte MySQL
$dbname = 'nom_de_la_base_de_donnees'; // Remplace par le nom de ta base de données
$username = 'nom_utilisateur'; // Utilisateur MySQL
$password = 'mot_de_passe'; // Mot de passe MySQL

try {
    // Établir la connexion avec PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Préparer la requête SQL pour récupérer les données
    $stmt = $conn->prepare("SELECT temps, DancerArmPressureSetpoint, DancerArmTensionActual, PostTensionActual, PreTensionSetpoint, PreTensionActual, HotAirBlowerSetpoint, NozzleHeaterActual, NozzleHeaterSetpoint, TapeHeaterActual, TapeHeaterSetpoint FROM test");
    $stmt->execute();

    // Récupérer les résultats sous forme de tableau associatif
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Retourner les résultats au format JSON
    echo json_encode($data);

} catch(PDOException $e) {
    // En cas d'erreur, afficher le message
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
