<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>ATIV</title>

	<!-- style bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-usua.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-usua-pagesmenu.css">
</head>
<body>

	<?php
			include ('../../conexao/conexao.php');
			include ('./menu.php');
			// include menu
	?>

	<section class="imguser">
		<div class="txt-imguser">
			<h1>Precisa de Ajuda?</h1>
			<h4>Escolha um exercício ou continue o desafio escolhido. Vamos nos exercitar!!</h4>
		</div>
		<img src="https://img.freepik.com/fotos-gratis/casal-de-idosos-fazendo-exercicios-em-casa_23-2148730109.jpg">
	</section>

	<section class="minhaarea-usua">
		<div class="card-ajuda">
			<h2>Como eu começo um Desafio?</h2>
			<div class="desc-ajuda">
				<div>
					<p>Primeiramente é pecisso acessar o página de desafios. Para isso, basta ir a barra de menu e clicar no link "Desafios".</p>
					<img src="">
				</div>
				<div>
					<img src="">
					<p>Depois, quando já tiver na página, é só escolher o desafio que deseja fazer e clicar sobre ele.</p>
				</div>
				<div>
					<p>Nisso, aparecerá a página do exercício do dia, tendo o vídeo e toda a descrição sobre o alongamento. Para concluir o desafio do dia é preciso preencher o formulário de autoavaluação. Caso não preenchido, não irá constar como feito.</p>
					<img src="">
				</div>
				<div>
					<img src="">
					<p>Nos próximos dias irá aparecer um card do desafio na sua área, bastando apenas clicar em "Continuar".</p>
				</div>
			</div>

			<div class="btn-mais-ajuda">
				<button>Ver Mais</button>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="../../js/js-user.js"></script>

</body>
</html>