<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>ATIV</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../css/style-usua.css">
	<link rel="stylesheet" type="text/css" href="../../css/style-md.css">
</head>

<body>

	<?php
	include('../conexao/conexao.php');
	include('./menu.php');
	// include menu
	$cd = $_GET['cd'];
	$consulta = mysqli_query($cn, "select * from exercicio where id_exercicio = '$cd'");
	$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

	?>

	<div class="container-treinodehoje">
		<section class="video-treinodehoje">

			<div class="tela-video">
				<iframe width="560" height="315" src="<?php echo $exibe[0]['video_exercicio']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
			<h2><?php echo $exibe[0]['nome_exercicio']; ?></h2>
			<div class="txt-treinodehoje">
				<p><?php echo $exibe[0]['desc_exercicio']; ?></p>
				<p><?php echo $exibe[0]['duracao_exercicio']; ?></p>
				<p><?php echo $exibe[0]['equipamentos_exercicio']; ?></p>
			</div>
			<!-- <div class="btns-treinodehoje">
				<button class="btn-treinodehoje active">Autoavaliação</button>
				<button class="btn-treinodehoje">Meu Grupo</button>
				<button class="btn-treinodehoje">Sejestões</button>
			</div> -->

			<div class="cards-btns-treinodehoje">

				<section class="card-btns active" id="autoavaliacao">
					<form class="depoimento-treinodehoje" method="post" action="../conexao/inserts/iautoavaliacao.php">
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
						<div class="campos_escondidos">
							<input type="text" name="id_video" value="<?= $exibe[0]['id_exercicio'] ?>">
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
	<script src="../../js/js-menu.js"></script>
</body>

</html>
