<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>ATIV</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../css/style-usua.css">
</head>

<body>

		<?php
            include ('../conexao/conexao.php');
            include ('./menu.php');
            // include menu

			
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
			<h2>Alongamento para Articulações</h2>
			<div class="txt-treinodehoje">
				<p>O Alongamento de hoje é direcionado às articulações, auxiliando no alivio de possiveis dores e no desenvolvimento dessa estrutura.</p>
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