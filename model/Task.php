<?php
// model/Task.php

class Task {
    private $tasks = [];

    public function __construct() {
        // Simulons des données stockées, en général cela viendrait d'une base de données
        $this->tasks = [
            ['id' => 1, 'title' => 'Faire les courses'],
            ['id' => 2, 'title' => 'Étudier MVC'],
            ['id' => 3, 'title' => 'Appeler Jean'],
        ];
    }

    // Récupérer toutes les tâches
    public function getTasks() {
        return $this->tasks;
    }

    // Ajouter une tâche
    public function addTask($title) {
        $this->tasks[] = ['id' => count($this->tasks) + 1, 'title' => $title];
    }
}
?>