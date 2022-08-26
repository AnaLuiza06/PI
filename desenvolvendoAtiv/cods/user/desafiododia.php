<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>ATIV</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../css/style-usua.css">
</head>

<body>

		<?php
            include ('../conexao/conexao.php');
            include ('./menu.php');
            // include menu

			$sql = "SELECT * FROM `desafios` WHERE `id_desafios` = '10'";

    		$consulta = mysqli_query($cn, $sql);
			$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

			// $nome = $exibe['nome_desafios'];

			print_r( $exibe[0]['nome_desafios'])
        ?>

	<div class="container-treinodehoje">
		<section class="video-treinodehoje">

			<div class="tela-video">
				<iframe width="730" height="520" src="https://www.youtube.com/embed/CM-uO5x7ZVs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

			<!-- <div class="outros-video">
				<div class="aquecimento-video">
					<img src="../../imgs/img-beneficios.png">
				</div>
				<div class="treino-video">
					<img src="../../imgs/img-beneficios.png">
				</div>
				<div class="encerramento-video">
					<img src="../../imgs/img-beneficios.png">
				</div>
			</div> -->
		</section>

		<section class="descricao-treinodehoje">
			<h2>Desafio 7 Dias</h2>
			<div class="dias-treinodehoje"> <!-- Se o numero de dias for > 10 -> display:block -->
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16" id="voltar-dias">
  					<path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
				</svg>
				<ul>
					<li>01</li>
					<li>02</li>
					<li>03</li>
					<li>04</li>
					<li>05</li>
					<li>06</li>
					<li>07</li>
					<li>07</li>
					<li>07</li>
					<li>07</li>

				</ul>
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16" id="indo-dias">
  					<path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
				</svg>

			</div>
			<div class="txt-treinodehoje">
				<p>O Alongamento de hoje é direcionado às articulações, auxiliando no alivio de possiveis dores e no desenvolvimento dessa estrutura.</p>
				<p>Dia: 03/07</p>
				<p>Duração: 23 min</p>
				<p>Equipamentos: uma barra(cabo de vassoura).</p>
			</div>
			<!-- <div class="btns-treinodehoje">
				<button class="btn-treinodehoje active">Autoavaliação</button>
				<button class="btn-treinodehoje">Meu Grupo</button>
				<button class="btn-treinodehoje">Sejestões</button>
			</div> -->

			<div class="cards-btns-treinodehoje">
				
				<section class="card-btns active" id="autoavaliacao">
					<form class="depoimento-treinodehoje">
						<h5>Autoavaliação</h5>
						<p>Como você acha que foi seu rendimento hoje?</p>
						<div class="redios-rendimento">
							<div class="redio-form">
  								<input type="radio" name="radio-rendimento" value="bom" checked>
  								<label>
    								Bom
  								</label>
							</div>
							<div class="redio-form">
  								<input type="radio" name="radio-rendimento" value="mau">
  								<label>
    								Mau
  								</label>
							</div>
							<div class="redio-form">
  								<input type="radio" name="radio-rendimento" value="melhorqueontem">
  								<label>
    								Melhor que ontem
  								</label>
							</div>
						</div>

						<p>Se sente cansado(a)?</p>
						<div class="redios-rendimento">
							<div class="radio-form">
  								<input type="radio" name="radio-cansaco" value="sim" checked>
  								<label>
    								Sim
  								</label>
							</div>
							<div class="radio-form">
  								<input type="radio" name="radio-cansaco" value="nao">
  								<label>
    								Não
  								</label>
							</div>
						</div>

						<p>Sentil alguma dor por conta do exercício anterior?</p>
						<div class="redios-rendimento">
							<div class="radio-form">
  								<input type="radio" name="radio-dores" value="sim" checked>
  								<label>
    								Sim
  								</label>
							</div>
							<div class="radio-form">
  								<input type="radio" name="radio-dores" value="nao">
  								<label>
    								Não
  								</label>
							</div>
						</div>

						<p>Ao terminar o exercício, tem dor no peito?</p>
						<div class="redios-rendimento">
							<div class="radio-form">
  								<input type="radio" name="radio-dornopeito" value="sim" checked>
  								<label>
    								Sim
  								</label>
							</div>
							<div class="radio-form">
  								<input type="radio" name="radio-dornopeito" value="nao">
  								<label>
    								Não
  								</label>
							</div>
						</div>
						<div class="btn-alterar">
							<button type="submit">Enviar</button>
						</div>
					</form>
				</section>

			</div>
		</section>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>