<?php
	require_once './../classes/form_tratament.php';
	require_once './../database/Conexao.php';
	require_once './../classes/task_control.php';
	session_start();
	$name = $_POST['name']?? '';
	$desc = $_POST['desc']?? '';
	$result_of_validation = form_tratament::validate_values(name: $name, desc: $desc);
	if($result_of_validation['sucess']) {
		//criar conexão
		$pdo =  Conexao::get_conexao();
		//inserir dados no banco de dados
		$task = new Task_control($pdo);
		$task->create($name, $desc);
		//encaminhar para a pǵina de tarefas
		$result_querie = $task->getAll();
		$json_result = urlencode(json_encode($result_querie));
		header("Location: http://localhost:8000/pages/tasks.php?status=sucess&result=$json_result");
		exit;
	} else {
		//mostrar erros com o session
		$_SESSION['erros'] = $result_of_validation['erros'];

		//redirecionar para o form de novo
		header("Location: http://localhost:8000/pages/form.php?status=false");
		exit;
	}

?>