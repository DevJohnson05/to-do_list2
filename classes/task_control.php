<?php 
    class Task_control {
        private $pdo;

        public function __construct($pdo) {
            $this->pdo = $pdo;
        }
        public function create($name, $desc) {
            $stmt = $this->pdo->prepare("INSERT INTO task (`name`, `description`) VALUES (?, ?)");
            return $stmt->execute([$name, $desc]);
        }
        public function getAll() {
            $stmt = $this->pdo->query("SELECT * FROM task");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function delete($id) {
            $stmt = $this->pdo->prepare("DELETE FROM task WHERE id = ?");
            return $stmt->execute([$id]);
        }
    }
?>