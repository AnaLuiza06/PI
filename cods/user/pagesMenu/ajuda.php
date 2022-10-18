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
			<h4>Veja as respostas para as principais dúvidas sobre o sistema da ATIV, podendo também manda a sua, caso não esteja listada abaixo.</h4>
		</div>
		<img src="https://img.freepik.com/fotos-gratis/casal-de-idosos-fazendo-exercicios-em-casa_23-2148730109.jpg">
		<div class="background-user"></div>
	</section>

	<section class="minhaarea-usua">

		<div class="card-ajuda">
			<div class="titulo-ajuda">
				<h2>Como eu começo um Alongamento?</h2>
				<button onclick="mostrarmais()">Ver Mais</button>
			</div>
			
			<div class="desc-ajuda">
				<div class="mostrar-div">
					<p>Primeiramente é pecisso acessar o página de Alongamenos. Para isso, basta ir a barra de menu e clicar no link "Alongamentos".</p>
					<img src="../../../imgs/img-menu-alongamentos.png"> 
				</div>
				<div class="mostrar-div">
					<img src="../../../imgs/img-cards-alongamentos.png"> 
					<p>Depois, quando já tiver na página, é só escolher o alongamento que deseja fazer e clicar no botão começar.</p>
				</div>
				<div>
					<p>Nisso, aparecerá a página do exercício, tendo o vídeo e toda a descrição sobre o alongamento. Para concluir é preciso preencher o formulário de autoavaluação. Caso não preenchido, não irá constar como feito.</p>
					<img src="../../../imgs/img-page-alongamentos.png"> 
				</div>
			</div>

			<div class="btn-mais-ajuda">
				
			</div>
		</div>

		<div class="card-form-ajuda">
			<div class="desc-card-form-ajuda">
				<h2>Caso sua Dúvida não esteja listada acima, nos envie para que possamos ajudar!</h2>
			</div>
			<div>
				<form method="post" action="../../conexao/inserts/iajuda-user.php?cd=<?php echo $_SESSION['ID'];?>">
					<textarea type="text" rows="6" cols="50" name="mensagem" placeholder="Digite sua mensagem" maxlength="100"></textarea>
					<div>
						<button type="submit">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script>

		function mostrarmais(){
			const cardAjuda = document.querySelector(".card-ajuda")
			cardAjuda.classList.toggle("active")

			const descAjuda = document.querySelector(".desc-ajuda")
			descAjuda.classList.toggle("active")
		}

	</script>

</body>
</html>