<?php
// controller/TaskController.php
require_once __DIR__ . '/../model/Task.php';

class TaskController {
    private $model;

    public function __construct() {
        $this->model = new Task(); // Création du modèle
    }

    // Méthode pour afficher les tâches
    public function displayTasks() {
        $tasks = $this->model->getTasks();  // Obtenir les tâches
        include __DIR__ . '/../view/task_view.php';  // Inclure la vue
    }

    // Méthode pour ajouter une tâche
    public function addTask($taskTitle) {
        $this->model->addTask($taskTitle);  // Ajouter une tâche
        $this->displayTasks();  // Afficher la vue mise à jour
    }
}

// Gestion des requêtes HTTP
$controller = new TaskController();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['taskTitle'])) {
    $controller->addTask($_POST['taskTitle']);
} else {
    $controller->displayTasks();
}
?>
