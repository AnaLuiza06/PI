<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>ATIV</title>

	<!-- style bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-usua.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-usua-pagesmenu.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-md.css">
</head>
<body>

	<?php
        include ('../../conexao/conexao.php');
        include ('./menu.php');
        // include menu
		$id_usuario = $_SESSION['ID'];
        // Acessar Dados
        $consulta = mysqli_query($cn, "SELECT * from desafios");
        $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
		
    ?>

	<section class="imguser">
		<div class="txt-imguser">
			<h1>Desafios</h1>
			<h4>Comece um desafio e crie o hábito de se exercitar todos os dias.</h4>
		</div>
		<img src="https://img.freepik.com/foto-gratis/personas-mayores-estirando-juntos_23-2148917041.jpg?w=1380&t=st=1669224824~exp=1669225424~hmac=131f447a12bcd531dd9931f408a8c2fbc5878789d32df3127989f37386a7b973">
		<div class="background-user"></div>
	</section>

	<section class="minhaarea-usua">
		<div class="cards-exercicios">
			<?php
				for ($i=0; $i < count($exibe); $i++) { 
			?>
				<div class="card-exercicios">
					<div class="desc-exercicios">
						<div class="topo-desc-exercicios">
							<h2><?php echo $exibe[$i]['nome_desafios']; ?></h2>
						</div>
						<div class="descricao-exercicio">
							<p><?php echo $exibe[$i]['desc_desafios']; ?></p>
							<p>Duração: <?php echo $exibe[$i]['duracao_desafios']; ?> dias</p>
							<div>
								<button><a href="../desafiododia.php?cd=<?php echo $exibe[$i]['id_desafios'];?>">Começar</a></button>
							</div>
						</div>
					</div>
					<img src="<?php echo $exibe[$i]['imagem_desafio']; ?>">
				</div>
			<?php
				};
			?>

			<?php
				include ("./footer.php");
			?>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script src="../../../js/js-user.js"></script>
	<script src="../../../js/js-menu.js"></script>
</body>
</html>