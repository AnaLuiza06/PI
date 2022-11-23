<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>ATIV</title>

	<!-- style bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../css/style-usua.css">
	<link rel="stylesheet" type="text/css" href="../../css/style-md.css">
</head>
<body>

	<?php
		include('menu.php');

		include('../conexao/conexao.php');

		$id = $_SESSION['ID'];

		$consulta = mysqli_query($cn,  "SELECT * FROM adm WHERE id_adm = '$id'");
		$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

		$consulta_alongamentos = mysqli_query($cn,  "SELECT * FROM exercicio");
		$exibe_alongamentos = mysqli_fetch_all($consulta_alongamentos, MYSQLI_ASSOC);

		$consulta_desafios = mysqli_query($cn,  "SELECT * FROM desafios");
		$exibe_desafios = mysqli_fetch_all($consulta_desafios, MYSQLI_ASSOC);

		$consulta_adm = mysqli_query($cn,  "SELECT * FROM adm");
		$exibe_adm = mysqli_fetch_all($consulta_adm, MYSQLI_ASSOC);

		$consulta_user = mysqli_query($cn,  "SELECT * FROM usuario");
		$exibe_user = mysqli_fetch_all($consulta_user, MYSQLI_ASSOC);
	?>

	<section class="imguser">
		<div class="txt-imguser">
			<h1>Olá, <?php echo $exibe[0]['nome_adm'];?>!</h1>
			<h4>Tenha acesso à todos os dados da ATIV!</h4>
		</div>
		<img src="https://img.freepik.com/foto-gratis/mujer-senior-tiro-completo-estar-activo_23-2148917035.jpg?w=1380&t=st=1669224127~exp=1669224727~hmac=03d5875eb4e0c159a3e18c22a486496f9717da4879f5408b59061cf21f90105e">
		<div class="background-user"></div>
	</section>

	<section class="dados-plataforma minha-area">
		<div class="card-dados">
			
		</div>

		<div class="card-dados-numeros">
			<div class="ntreinos-evolucao">
				<div class="numero-videos">
					<?php

						if(count($exibe_user) < 10){
							echo "<h1>0".count($exibe_user)."</h1>";
						}
						else{
							echo "<h1>".count($exibe_user)."</h1>";
						}

					?>	
					<h5>Usuários</h5>
				</div>
				<div class="numero-desafios">
					<?php

						if(count($exibe_adm) < 10){
							echo "<h1>0".count($exibe_adm)."</h1>";
						}
						else{
							echo "<h1>".count($exibe_adm)."</h1>";
						}

					?>
					<h5>Administradores</h5>
				</div>
			</div>

			<div class="ntreinos-evolucao">
				<div class="numero-videos">
					<?php

						if(count($exibe_alongamentos) < 10){
							echo "<h1>0".count($exibe_alongamentos)."</h1>";
						}
						else{
							echo "<h1>".count($exibe_alongamentos)."</h1>";
						}

					?>
					<h5>Exercícios</h5>
				</div>
				<div class="numero-desafios">
					<?php

						if(count($exibe_desafios) < 10){
							echo "<h1>0".count($exibe_desafios)."</h1>";
						}
						else{
							echo "<h1>".count($exibe_desafios)."</h1>";
						}

					?>
					<h5>Desafios</h5>
				</div>
			</div>
		</div>

		<div class="card-dados">
			
		</div>
	</section>

	<?php
		include("./footer.php");
	?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="../../js/js-user.js"></script>

</body>
</html>