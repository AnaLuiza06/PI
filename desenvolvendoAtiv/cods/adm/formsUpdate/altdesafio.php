<!DOCTYPE html>
<html lang="pt-br">


<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ATIV</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-usua.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-adm.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-md.css">

</head>

<body>
	<?php
	include('../../conexao/conexao.php');
	include('./menu.php');
	// include menu

	// Pegando Dados do Desafio
	$id_desafio = $_GET['cd'];
	$consulta_desafio = mysqli_query($cn, "SELECT * FROM desafios WHERE id_desafios = '$id_desafio'");
	$exibe_desafio = mysqli_fetch_all($consulta_desafio, MYSQLI_ASSOC);
	$duracao_desafio = $exibe_desafio[0]['duracao_desafios'];


	// Relacionado Vídeos
	$consulta_videos = mysqli_query($cn, "SELECT * FROM videosDesafio
                WHERE id_desafio = '$id_desafio'");
	$exibe_videos = mysqli_fetch_all($consulta_videos, MYSQLI_ASSOC);

	// Pegando Dados Exercícios
	$consulta_exercicio = mysqli_query($cn, "SELECT * FROM exercicio");
	$exibe_exercicio = mysqli_fetch_all($consulta_exercicio, MYSQLI_ASSOC);
	?>
	<section class="form-add-exercicio">
		<form class="form-desafio" method="post" action="../../conexao/updates/updesafio.php?cd=<?= $id_desafio; ?>">
			<h2>Alterar</h2>
			<div>
				<section>
					<div class="input-form-cadastro">
						<label for="inputnome" id="labelnome">Nome</label>
						<input type="text" name="nome" id="inputnome" value="<?php echo $exibe_desafio[0]['nome_desafios']; ?>">
					</div>

					<div class="input-form-cadastro">
						<label for="inputdescricao">Descrição</label>
						<input type="text" name="descricao" id="inputdescricao" value="<?php echo $exibe_desafio[0]['desc_desafios']; ?>">
					</div>

					<div class="input-form-cadastro">
						<label for="inputduracao">Duração</label>
						<input type="number" name="duracao" id="inputduracao" value="<?php echo $exibe_desafio[0]['duracao_desafios']; ?>">
					</div>

					<div class="input-form-cadastro">
						<label for="inputcontraindicacoes">Contra Indicações</label>
						<input type="text" name="contraindocacoes" id="inputcontraindicacoes" value="<?php echo $exibe_desafio[0]['contra_indicacoes_desafio']; ?>">
					</div>

					<div class="input-form-cadastro">
						<label for="inputimagem">Imagem</label>
						<input type="text" name="imagem" id="inputimagem" value="<?php echo $exibe_desafio[0]['imagem_desafio']; ?>">
					</div>
				</section>

				<section>

					<div class="input-form-cadastro">
						<label>Vídeos</label>
						<section>
							<?php
							foreach ($exibe_exercicio as &$exercicio) :
								$res = '';
								foreach ($exibe_videos as $video) {
									if ($video['id_video'] === $exercicio['id_exercicio']) {
										$res = 'active';
										break;
									}
								}
							?>
								<div class='card-videos <?= $res ?>'>
									<input class='card-videos-checkbox' type='checkbox' name="videos[]" value='<?= $exercicio['id_exercicio'] ?>' <?= $res === 'active' ? 'checked' : '' ?>>
									<img src='<?= $exercicio['imagem_exercicio'] ?>' alt=''>
									<div>
										<h5><?= $exercicio['nome_exercicio'] ?></h5>
										<p><?= $exercicio['duracao_exercicio'] ?></p>
									</div>
									<div class='tipo-maisteinos'>
										<p><?= $exercicio['foco_exercicio'] ?></p>
									</div>
								</div>
							<?php endforeach; ?>
						</section>
					</div>
				</section>
			</div>
			<button onclick="" type="submit">Entrar</button>
		</form>
	</section>
	<script type="text/javascript">
		const cards = document.querySelectorAll(".input-form-cadastro .card-videos")

		function marcaCheckBox(card) {
			const input = card.querySelector('input')
			const isChecked = input.checked
			card.classList.toggle("active", !isChecked)
			input.checked = !isChecked

		}
		cards.forEach(card => {
			card.addEventListener("click", (event) => marcaCheckBox(card))

		})
	</script>
</body>

</html>