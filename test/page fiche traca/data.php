<?php
// Connexion à la base de données
$host = "localhost";
$dbname = "u230474653_frettage";
$username = "u230474653_DUTERTRE";
$password = "Parker92700";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour récupérer les données
    $stmt = $conn->prepare("SELECT temps, DancerArmPressureSetpoint, DancerArmTensionActual, PostTensionActual, PreTensionSetpoint, PreTensionActual, HotAirBlowerSetpoint, NozzleHeaterActual, NozzleHeaterSetpoint, TapeHeaterActual, TapeHeaterSetpoint FROM test");
    $stmt->execute();

    // Récupérer les résultats sous forme de tableau associatif
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Envoyer les résultats sous format JSON
    echo json_encode($data);

} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
