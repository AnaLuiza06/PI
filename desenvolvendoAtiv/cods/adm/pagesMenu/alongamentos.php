<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>ATIV</title>

	<!-- style bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-usua.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-adm.css">
</head>
<body>

	<?php
        include ('../../conexao/conexao.php');
        include ('../menu.php');
        // include menu
        session_start();
		$id_usuario = $_SESSION['ID'];
        // Acessar Dados
        $consulta = mysqli_query($cn, "SELECT * from exercicio");
        $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
    ?>

	<section class="imguser">
		<div class="txt-imguser">
			<h1>Alongamentos</h1>
			<h4>O hábito de se alongar todos os dias trás muitos beneficios ao corpo. O como você irá se alongar hoje?</h4>
			<button><a href="#">Adicionar Alongamento</a></button>
		</div>
		<img src="https://img.freepik.com/fotos-gratis/casal-de-idosos-fazendo-exercicios-em-casa_23-2148730109.jpg">
	</section>

	<section class="minhaarea-usua">
		<div class="cards-tabela">
			<?php
				for ($i=0; $i < count($exibe); $i++) { 
			?>

			<div class="card-tabela">
				<section>
					<div class="img-card-tabela">
						<img src="<?php echo $exibe[$i]['imagem_exercicio']; ?>">
					</div>
					<div class="titulo-card-tabela">
						<h3><?php echo $exibe[$i]['nome_exercicio']; ?></h3>
						<p><?php echo $exibe[$i]['desc_exercicio']; ?></p>
					</div>
					<div class="desc-card-tabela">
						<p><?php echo $exibe[$i]['duracao_exercicio']; ?></p>
						<p><?php echo $exibe[$i]['equipamentos_exercicio']; ?></p>
						<p><?php echo $exibe[$i]['contra_indicacoes_exercicio']; ?></p>
					</div>
				</section>

				<section>
					<div class="btns-card-tabela">
						<button><a href="../formsUpdate/altaexercicio.php?cd=<?php echo $exibe[$i]['id_exercicio']; ?>">Alterar</a></button>
						<button><a href="#">Deletar</a></button>
					</div>
				</section>
			</div>
			<?php
				};
			?>


	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script src="../../../js/js-user.js"></script>
</body>
</html>