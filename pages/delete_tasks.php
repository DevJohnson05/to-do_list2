<?php
    require_once './../database/Conexao.php';
    require_once './../classes/task_control.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['tasks'])) {
        $pdo = Conexao::get_conexao();
        $taskControl = new Task_control($pdo);
        foreach ($_POST['tasks'] as $id) {
            $taskControl->delete($id);
        }
    }
    header("Location: tasks.php");
    exit;
?>