<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>ATIV</title>

	<!-- style bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../css/style-usua.css">
</head>
<body>

	<?php
        include ('../conexao/conexao.php');
        include ('./menu.php');
        // include menu

        // Acessar Dados
        $consulta = mysqli_query($cn, "select * from exercicio");
        $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC)
    ?>

	<section class="imguser">
		<div class="txt-imguser">
			<h1>Alongamentos</h1>
			<h4>O hábito de se alongar todos os dias trás muitos beneficios ao corpo. O como você irá se alongar hoje?</h4>
		</div>
		<img src="https://img.freepik.com/fotos-gratis/casal-de-idosos-fazendo-exercicios-em-casa_23-2148730109.jpg">
	</section>

	<section class="minhaarea-usua">
		<div class="cards-exercicios">
			<?php
				for ($i=0; $i < count($exibe); $i++) { 
			?>
				<div class="card-exercicios">
					<div class="desc-exercicios">
						<div class="topo-desc-exercicios">
							<h2><?php echo $exibe[$i]['nome_exercicio']; ?></h2>
						</div>
						<div class="descricao-exercicio">
							<p><?php echo $exibe[$i]['desc_exercicio']; ?></p>
							<p><?php echo $exibe[$i]['duracao_exercicio']; ?></p>
							<p><?php echo $exibe[$i]['equipamentos_exercicio']; ?></p>
						</div>
						<div class="favoritar">
							<div class="tipo-maisteinos">
								<p>Articulações</p>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
	  							<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
							</svg>
						</div>
					</div>
					<img src="../../imgs/img-inicio.png">
				</div>

			<?php
				};
			?>


	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script src="../../js/js-user.js"></script>

</body>
</html>