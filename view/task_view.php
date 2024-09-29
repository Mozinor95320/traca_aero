<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de Tâches</title>
    <link rel="stylesheet" href="/public/styles.css">
</head>
<body>
    <h1>Ma Liste de Tâches</h1>
    
    <!-- Affichage des tâches -->
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li><?php echo htmlspecialchars($task['title']); ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Formulaire pour ajouter une nouvelle tâche -->
    <form method="POST" action="/public/index.php">
        <label for="taskTitle">Nouvelle tâche:</label>
        <input type="text" id="taskTitle" name="taskTitle" required>
        <button type="submit">Ajouter</button>
    </form>

    <script src="/public/script.js"></script>
</body>
</html>
