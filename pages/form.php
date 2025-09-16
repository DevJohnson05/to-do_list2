<?php
	session_start();
	$erros[] = $_SESSION['erros'] ??[];
	unset($_SESSION['erros']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="./css/form.css">
</head>
<body>
	<header>
		
	</header>
	<main class="form_control">
		<form action="tratament_form.php" method="post" class="">
			<h3>Cadastro de Tarefas</h3>
			<label for="name">Nome</label>
			<input type="text" name="name" placeholder="Digite o nome da tarefa">
			<?php if (!empty($erros)):?>
				<span style="color: red;"><?=$erros[0][0]?></span>
			<?php endif;?>
			<label for="desc">Descrição</label>
			<input type="text" name="desc" placeholder="Digite a descrição da tarefa">
			<?php if (!empty($erros)):?>
				<span style="color: red;"><?=$erros[0][1]?></span>
			<?php endif;?>
			<button type="submit" class="btn">Cadastrar</button>
		</form>
	</main>
	<footer>
		
	</footer>
</body>
</html>