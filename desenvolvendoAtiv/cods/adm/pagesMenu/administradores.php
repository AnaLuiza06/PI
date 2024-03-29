<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ATIV</title>

	<!-- style bootstrap -->
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

	// Acessar Dados
	$consulta = mysqli_query($cn, "SELECT * from adm");
	$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
	?>

	<section class="imguser">
		<div class="txt-imguser">
			<h1>Administradores</h1>
			<h4>O hábito de se alongar todos os dias trás muitos beneficios ao corpo. O como você irá se alongar hoje?</h4>
			<button><a href="../formsAdd/addadministrador.php?adcionado=entrada">Adicionar Administrador</a></button>
		</div>
		<img src="https://img.freepik.com/foto-gratis/personas-mayores-sonrientes-tiro-medio_23-2148917033.jpg?w=1060&t=st=1669224666~exp=1669225266~hmac=0a46cdfb9c83f9f0920375dee3cb4699179e6fea0eaa5a2a82a99ec1ae85f749">
		<div class="background-user"></div>
	</section>

	<section class="minhaarea-usua">
		<div class="cards-tabela">
			<?php
			for ($i = 0; $i < count($exibe); $i++) {
			?>

				<div class="card-tabela">
					<section>
						<div class="titulo-card-tabela">
							<h3><?php echo $exibe[$i]['nome_adm']; ?></h3>
						</div>
						<div class="desc-card-tabela">
							<p><?php echo $exibe[$i]['email_adm']; ?></p>
						</div>
					</section>

				</div>
			<?php
			};
			?>

		</div>
		<?php
		include("./footer.php");
		?>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script src="../../../js/js-user.js"></script>
</body>

</html>