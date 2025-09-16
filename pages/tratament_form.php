<?php
	require_once './../classes/form_tratament.php';
	require_once './../database/Conexao.php';
	session_start();
	$name = $_POST['name']?? '';
	$desc = $_POST['desc']?? '';
	$result_of_validation = form_tratament::validate_values(name: $name, desc: $desc);
	if($result_of_validation['sucess']) {
		//inserir dados no banco de dados
		
		//encaminhar para a pǵina de tarefas
		header("Location: http://localhost:8000/pages/tasks.php?status=sucess");
		exit;
	} else {
		//mostrar erros com o session
		$_SESSION['erros'] = $result_of_validation['erros'];

		//redirecionar para o form de novo
		header("Location: http://localhost:8000/pages/form.php?status=false");
		exit;
	}

?>