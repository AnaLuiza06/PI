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
        $consulta = mysqli_query($cn, "SELECT * from desafios");
        $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

        $quantidade = count($exibe);
    ?>

	<section class="imguser">
		<div class="txt-imguser">
			<h1>Desafios</h1>
			<h4>O hábito de se alongar todos os dias trás muitos beneficios ao corpo. O como você irá se alongar hoje?</h4>
			<button><a href="../formsAdd/adddesafio.php?adcionado=entrada">Adicionar Desafio</a></button>
		</div>
		<img src="https://img.freepik.com/fotos-gratis/casal-de-idosos-fazendo-exercicios-em-casa_23-2148730109.jpg">
		<div class="background-user"></div>
	</section>

	<section class="minhaarea-usua">

		<div class="duvidas-user">
			<div class="cards-tabela">
				<?php

				if($quantidade < 1){
					echo "<h4>Não Há Desafios Cadastrados</h4>";
				}

				else{
					for ($i=0; $i < count($exibe); $i++){ 

					$desafio = $exibe[$i]['id_desafios'];
					// $consulta_video = mysqli_query($cn, "SELECT * FROM `videosDesafio` WHERE `id_desafio` = '$desafio'");
					// $exibe_video = mysqli_fetch_all($consulta_video, MYSQLI_ASSOC);

					// $id = $exibe_video[$i]['id_video'];
					?>

				<div class="card-tabela" onclick="expandeCard()">
					<section class="mgs-mini">
						<div class="desc-tabela">
							<h5><?php echo $exibe[$i]['nome_desafios'];?></h5>
							<p><?php echo $exibe[$i]['desc_desafios'];?></p>
						</div>
						<div class="duracao-tabela">
							<p><?php echo $exibe[$i]['duracao_desafios'];?> dias</p>
							<p><?php echo $exibe[$i]['contra_indicacoes_desafio'];?></p>
						</div>
						<div class="btns-tabela">
							<button><a href="../formsUpdate/altdesafio.php?cd=<?php echo $desafio;?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
								  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
								</svg>
							</a></button>
							<button><a href="../../conexao/delete/deldesafio.php?cd=<?php echo $desafio;?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
								  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
								</svg>
							</a></button>
						</div>
					</section>
				</div>

				<?php
					}
				}
				?>
			</div>
		</div>

	</section>

	<!-- <section class="container-form-responder">
		<form>
			<div class="cards-responde">
				<div class="cards-resposta">
					<h3>Dúvida</h3>
					<div>
						<label>ID</label>
						<input type="number" name="id_user">
					</div>
					<div>
						<label>Nome</label>
						<input type="text" name="nome">
					</div>
					<div>
						<label>Mensagem</label>
						<textarea type="text" rows="6" cols="50" name="duvida" placeholder="Digite sua mensagem" maxlength="100"></textarea>
					</div>
				</div>
				<div class="cards-resposta">
					<h3>Resposta</h3>
					<div>
						<label>ID</label>
						<input type="number" name="id_adm">
					</div>
					<div>
						<label>Apresentação</label>
						<input type="text" name="apresentacao">
					</div>
					<div>
						<label>Resposta</label>
						<textarea type="text" rows="6" cols="50" name="mensagem" placeholder="Digite sua resposta" maxlength="100"></textarea>
					</div>
				</div>
			</div>
			<div class="btns-responde">
				<button>Cancelar</button>
				<button>Enviar</button>
			</div>
		</form>
	</section> -->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script src="../../../js/tabela-ajuda.js"></script>
</body>
</html>