<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ATIV</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-usua.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-adm.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-md.css">

</head>

<body>
	<?php
	include('../../conexao/conexao.php');
	include('./menu.php');
	// include menu
	?>
	<section class="form-add-exercicio">

		<?php

		$msg = $_GET['adcionado'];

		if ($msg == 'true') {
		?>
			<div class="msg-add">
				<p>Administrador Cadastrado</p>
			</div>
		<?php
		} else if ($msg == 'false') {
		?>
			<div class="msg-add">
				<p>Administrador Já Exixtente</p>
			</div>
		<?php
		}
		?>

		<form method="post" action="../../conexao/inserts/iadministrador.php">
			<h2>Adicionar</h2>
			<div class="input-form-cadastro">
				<label for="inputnome" id="labelnome">Nome</label>
				<input type="text" name="nome" id="inputnome">
			</div>

			<div class="input-form-cadastro">
				<label for="inputequipamentos">Email</label>
				<input type="email" name="email" id="inputequipamentos">
			</div>

			<div class="input-form-cadastro">
				<label for="inputcontraindicacoes">Data de Nascimento</label>
				<input type="date" name="nascimento" id="inputcontraindicacoes">
			</div>

			<div class="input-form-cadastro">
				<label for="inputequipamentos">Senha</label>
				<input type="password" name="senha" id="inputequipamentos">
			</div>

			<button onclick="" type="submit">Enviar</button>
		</form>
	</section>
</body>

</html>