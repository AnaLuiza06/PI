<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>ATIV</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../css/style-usua.css">
	<link rel="stylesheet" type="text/css" href="../../css/modal.css">
</head>

<body>

	<?php
	include('../conexao/conexao.php');
	include('./menu.php');
	// include menu

	$id_usuario = $_SESSION['ID'];

	$cd = $_GET['cd'];
	$sql = "SELECT * FROM `desafios` WHERE `id_desafios` = '$cd'";
	$consultaDesafio = mysqli_query($cn, $sql);
	$exibeDesafio = mysqli_fetch_all($consultaDesafio, MYSQLI_ASSOC);

	// $nome = $exibe['nome_desafios'];

	//print_r( $exibe[0]['nome_desafios']);
	$id_desafio = $exibeDesafio[0]['id_desafios'];
	$nome = $exibeDesafio[0]['nome_desafios'];
	$duracao = $exibeDesafio[0]['duracao_desafios'];


	?>

	<div class="container-treinodehoje">
		<section class="video-treinodehoje">

			<div class="tela-video">
			</div>
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
					for ($i = 0; $i < $duracao; $i++) :
					?>
						<li class="pegarJS">
							<button data-desafio="<?= $i ?>">
								<?php
								$number = $i + 1;
								if ($number < 10) {
									echo "0$number";
								} else {
									echo $number;
								}
								?>
							</button>
						</li>
					<?php endfor; ?>
				</ul>
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16" id="indo-dias">
					<path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
				</svg>

			</div>

			<div class="cards-btns-treinodehoje">
				<section class="txt-treinodehoje">
					<!-- <p>Descrição</p>
<p>Dia: 05/07</p>
<p>Duração: 23 min</p>
<p>Equipamentos: uma barra(cabo de vassoura).</p> -->
				</section>
				<section class="card-btns active" id="autoavaliacao">

					<?php
					$sql = "SELECT * FROM `videosDesafio` WHERE `id_video` = '$cd'";
					$consultaDesafio = mysqli_query($cn, $sql);
					$exibeDesafio = mysqli_fetch_all($consultaDesafio, MYSQLI_ASSOC);
					?>
					<form class="depoimento-treinodehoje" method="post" action="./api/registrarDesafio.php" onsubmit="">
						<h5>Autoavaliação</h5>
						<p>Como você acha que foi seu rendimento hoje?</p>
						<div class="radios-rendimento">
							<div class="radio-form">
								<input type="radio" name="radio-rendimento" value="bom" checked>
								<label>
									Bom
								</label>
							</div>
							<div class="radio-form">
								<input type="radio" name="radio-rendimento" value="mau">
								<label>
									Mau
								</label>
							</div>
							<div class="radio-form">
								<input type="radio" name="radio-rendimento" value="melhorqueontem">
								<label>
									Melhor que ontem
								</label>
							</div>
						</div>

						<p>Se sente cansado(a)?</p>
						<div class="radios-rendimento">
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
						<div class="radios-rendimento">
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
						<div class="radios-rendimento">
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
						<div class="campos-invisiveis">
							<input type="text" name="id_video" value="<?php echo $cd; ?>">
							<input type="text" name="id_usuario" value="<?php echo $id_usuario; ?>">
						</div>
					</form>
				</section>
			</div>
		</section>
	</div>
	<div class="modal-alert">
		<p class="modal-alert-text"></p>
		<div class="modal-alert-progress"></div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script>
		// focus radio with label
		const radioContainer = document.querySelectorAll('.radio-form');
		radioContainer.forEach((element) => {
			const label = element.querySelector('label');
			const radio = element.querySelector('input');
			label.addEventListener('click', () => {
				radio.checked = true;
			});
		});
		// modal e seus controles
		const modalAlert = {
			element: document.querySelector('.modal-alert'),
			open() {
				this.element.classList.add('active');
				this.modalTransition()
			},
			close() {
				this.element.classList.remove('active');
			},
			setTextInAlert(text) {
				this.element.querySelector('.modal-alert-text').innerText = text;
			},
			setTypeModal(type) {
				const types = {
					'success': "modal-alert__success",
					'error': "modal-alert__error",
				}
				if (types[type]) {
					this.element.classList.add(types[type]);
				}
			},
			clearModal() {
				this.element.classList.remove("modal-alert__success");
				this.element.classList.remove("modal-alert__error");
				this.element.querySelector('.modal-alert-text').innerText = "";

			},
			modalTransition() {
				const progress = this.element.querySelector('.modal-alert-progress');
				setTimeout(() => {
					progress.style.width = "0%";
				}, 1000);
				setTimeout(() => {
					this.close();
					this.clearModal();
				}, 3000);

			}
		}

		// -> Selecionando desfio e video
		const diaEscolhido = document.querySelectorAll(".pegarJS");
		diaEscolhido.forEach(li => {
			li.addEventListener("click", () => trocarInformacoesDoDesafio(li))
		})
		const videoNaPagina = []

		const telaVideo = document.querySelector(".tela-video");
		const treinoDeHoje = document.querySelector(".txt-treinodehoje");
		let idDesafioAtual = 1;
		let posicaoVideo = 0;

		function trocarInformacoesDoDesafio(li) {
			const button = li.querySelector('button');
			const dataset = button.dataset;
			const idDesafio = dataset.desafio;
			if (idDesafio !== idDesafioAtual) escrevaVideoNoHtml(idDesafio);
		}

		function escreverTreinoDeHoje(informacoes = {
			foco_exercicio: "",
			desc_exercicio: "",
			duracao_exercicio: "00:00:00",
			equipamentos_exercicio: "",
			contra_indicacoes_exercicio: ""
		}) {
			treinoDeHoje.innerHTML = `
<p>${informacoes.desc_exercicio}</p>
<p>Duração: ${informacoes.duracao_exercicio}</p>
<p>Equipamentos: ${informacoes.equipamentos_exercicio}.</p>
<p>Contra indicações: ${informacoes.contra_indicacoes_exercicio}.</p>
`
		}

		async function pegaVideo(id) {
			const response = await fetch(`./api/pegaVideo.php?id=${id}`);
			console.log(response)
			const data = await response.json();
			return data
		}

		function escrevaVideoNoHtml(pos = 0) {
			posicaoVideo = pos
			const data = videoNaPagina[pos];
			console.log(pos)
			escreverTreinoDeHoje(data);
			const video = data.video_exercicio
			telaVideo.innerHTML = video
		}

		async function pegarExercicio(idDesafio = 1) {
			idDesafioAtual = idDesafio;
			const response = await fetch(`./api/pegaExercicio.php?id=${idDesafio}`);
			const data = await response.json();

			data.forEach(async (el) => {
				console.log(el)
				const id_video = el.id_video;
				const res = await pegaVideo(id_video);
				videoNaPagina.push(res[0]);
				escrevaVideoNoHtml();
			})
		}
		pegarExercicio();

		const form = document.querySelector(".depoimento-treinodehoje");
		form.addEventListener('submit', handleSubmit);

		// logica de envio do form
		async function handleSubmit(event) {
			event.preventDefault();
			const formData = new FormData(event.target);
			const {
				id_exercicio
			} = videoNaPagina[posicaoVideo];
			const id_desafio = <?= $id_desafio ?>;

			const response = await fetch(`./api/registraDesafio.php?id_desafio=${id_desafio}`, {
				method: 'POST',
				body: formData,
			});
			const json = await response.json();
			if (json.success) {
				modalAlert.setTextInAlert("Depoimento enviado com sucesso!");
				modalAlert.setTypeModal("success");
				modalAlert.open();

				form.reset();
			} else {
				alert("Erro ao enviar depoimento!");
			}

		}
	</script>
</body>

</html>
