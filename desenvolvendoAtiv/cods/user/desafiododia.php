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
	include('../conexao/conexao.php');
	include('./menu.php');
	// include menu

	$sql = "SELECT * FROM `desafios` WHERE `id_desafios` = '1'";
	$consultaDesafio = mysqli_query($cn, $sql);
	$exibeDesafio = mysqli_fetch_all($consultaDesafio, MYSQLI_ASSOC);

	// $nome = $exibe['nome_desafios'];

	//print_r( $exibe[0]['nome_desafios']);
	$id_desafio = $exibeDesafio[0]['id_desafios'];
	$nome = $exibeDesafio[0]['nome_desafios'];
	$duracao = $exibeDesafio[0]['duracao_desafios'];

	$sql = "SELECT `id_video` FROM `videosDesafio` WHERE `id_desafio` = '$id_desafio'";

	$consulta = mysqli_query($cn, $sql);
	$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
	//print_r($exibe);

	for ($i = 0; $i < $duracao; $i++) {

		$id_exercicio = $exibe[$i]['id_video'];
		$sql = "SELECT * FROM `exercicio` WHERE `id_exercicio` = '$id_exercicio'";
		$consultaDesafio = mysqli_query($cn, $sql);
		$exibeDesafio = mysqli_fetch_all($consultaDesafio, MYSQLI_ASSOC);
	}

	?>

	<div class="container-treinodehoje">
		<section class="video-treinodehoje">

			<div class="tela-video">
				<?php echo $exibe[0]["video"]; ?>
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
			<h2><?php echo $nome; ?></h2>
			<div class="dias-treinodehoje">
				<!-- Se o numero de dias for > 10 -> display:block -->
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16" id="voltar-dias">
					<path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
				</svg>
				<ul>

					<?php
					for ($i = 1; $i <= $duracao; $i++) :
					?>
						<li class="pegarJS">
							<?php 
								echo "<a href='videodesafio.php?cd =".$i."'>";
								echo $i < 10 ? "0$i" : $i;
							?></a>
						</li>
					<?php endfor; ?>

				</ul>
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16" id="indo-dias">
					<path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
				</svg>

			</div>


			<?php
			include('./videodesafio.php');
			?>

		</section>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script>
		const diaEscolhido = document.querySelectorAll(".pegarJS")
		diaEscolhido.forEach(li => {
			li.addEventListener("click", () => {
				const input = li.querySelector('input');
				input.checked = true;
			})
		})
	</script>
</body>

</html>