<?php 
    session_start();
    if (isset($_GET['result'])) {
        $result_array = json_decode(urldecode($_GET['result']), true);
        // Agora $result_array é um array PHP
    }

    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tarefas</title>
    <link rel="stylesheet" href="css/tasks.css">
</head>
<body>
    <h1>Lista de Tarefas</h1>
    <div>
        <a href="http://localhost:8000/pages/form.php" class="btn-voltar">Voltar ao Início</a>
    </div>
    <form id="deleteForm" action="delete_tasks.php" method="post">
        <table>
            <thead>
                <tr>
                    <th>Selecionar</th>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($result_array)): ?>
                    <?php foreach ($result_array as $task): ?>
                        <tr>
                            <td><input type="checkbox" name="tasks[]" value="<?= htmlspecialchars($task['id']) ?>"></td>
                            <td><?= htmlspecialchars($task['id']) ?></td>
                            <td><?= htmlspecialchars($task['name']) ?></td>
                            <td><?= htmlspecialchars($task['description']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="4">Nenhuma tarefa encontrada.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
        <button type="submit" id="deleteBtn">Apagar Selecionadas</button>
    </form>
    <script src="js/tasks.js"></script>
</body>
</html>