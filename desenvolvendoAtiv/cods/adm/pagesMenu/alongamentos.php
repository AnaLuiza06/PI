<!DOCTYPE html>
<html lang="pt-br">
<head>
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
        include ('../../conexao/conexao.php');
        include ('./menu.php');
        // include menu
        
        // Acessar Dados
        $consulta = mysqli_query($cn, "SELECT * from exercicio");
        $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
    ?>
    
	<section class="imguser">
		<div class="txt-imguser">
			<h1>Alongamentos</h1>
			<h4>O hábito de se alongar todos os dias trás muitos beneficios ao corpo. O como você irá se alongar hoje?</h4>

			<button><a href="../formsAdd/addexercicio.php?adcionado=entrada">Adicionar Alongamento</a></button>
		</div>
		</div>
		<img src="https://img.freepik.com/fotos-gratis/casal-de-idosos-fazendo-exercicios-em-casa_23-2148730109.jpg">
		<div class="background-user"></div>
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

					<div class="btns-tabela">
						<button><a href="../formsUpdate/altaexercicio.php?cd=<?php echo $exibe[$i]['id_exercicio']; ?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
								  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
								</svg>
						</a></button>
						<button><a href="../../conexao/delete/delexercicio.php?cd=<?php echo $exibe[$i]['id_exercicio'];?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
								  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
								</svg>
						</a></button>
					</div>
				</section>
			</div>
			<?php
				};
			?>

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