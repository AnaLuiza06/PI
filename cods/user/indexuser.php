<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>ATIV</title>

	<!-- style bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../css/style-usua.css">
	<link rel="stylesheet" type="text/css" href="../../css/style-md.css">
</head>
<body>

	<?php

		require ("./menu.php");
	?>

	<section class="imguser">
		<div class="txt-imguser">
			<h1>Olá, <?php echo $exibe[0]['nome_usuario'];?>!</h1>
			<h4>Escolha um exercício ou continue o desafio escolhido. Vamos nos exercitar!!</h4>
		</div>
		<img src="https://img.freepik.com/fotos-gratis/casal-de-idosos-fazendo-exercicios-em-casa_23-2148730109.jpg">
		<div class="background-user"></div>
	</section>

	<section class="minhaarea-usua">

		<div class="desafio-atual">
			<h2 class="titulo-sections">Desafio Atual</h2>

			<div class="card-desafioatual">
				<div class="expo-geral">
					<h3>Desafio dos 7 dias</h3>
					<p>Um desafio de uma semana tendo o hábito de se exercitar todos dias. Cada dia um tipo de alongamento, focando em várias partes do corpo.</p>
					<p>Sendo um dos desafios indicados para iniciantes na ATIV, serão 5 dias ativos, fazendo os exercícios, e dois dias de descaço.</p>
					<div class="evolucao">
						<div class="container-evolucao">
							<div></div>
						</div>
						<p>30%</p>
					</div>
				</div>
				<button><a href="#">Continuar</a></button>
				<img src="../../imgs/img-inicio.png">
			</div>
		</div>

		<div class="minha-evolucao">
			<h2 class="titulo-sections">Minha Evolução</h2>

			<?php
				$sql = "SELECT * FROM autoavaliacao where id_usuario = '$id'";
				$consulta = mysqli_query($cn, $sql);
				$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

				$Nexercicios = count($exibe);

			?>

			<?php
				$consulta_dados = mysqli_query($cn, "SELECT * FROM usuario WHERE id_usuario = '$id'");
				$exibe_dados = mysqli_fetch_all($consulta_dados, MYSQLI_ASSOC);

				$peso = $exibe_dados[0]['peso_usuario'];
				$altura = $exibe_dados[0]['altura_usuario'];

				$imc = $peso / ($altura * $altura);

				$msg_imc = "";

				if($imc < 18.5){
					$msg_imc = "Seu Indice de Massa Corporal está baixo, por isso, busque ajuda profissonal para aumenta-lo um pouco.";
				} else
				if($imc > 18.5 && $imc < 24.9){
					$msg_imc = "Seu Indice de Massa Corporal está normal.";
				} else
				if($imc > 25 && $imc < 29.9){
					$msg_imc = "Seu Indice de Massa Corporal está alto, indicando sobrepeso. Busque ajuda profissonal para abaixa-lo.";
				} else
				if($imc > 30 && $imc < 34.9){
					$msg_imc = "Seu Indice de Massa Corporal está muito alto, inicando Obesidade I. Busque ajuda profissonal para abaixa-lo.";
				} else
				if($imc > 35 && $imc < 39.9){
					$msg_imc = "Seu Indice de Massa Corporal está muito alto, inicando Obesidade II. Busque ajuda profissonal para abaixa-lo.";
				} else
				if($imc > 40){
					$msg_imc = "Seu Indice de Massa Corporal está muito alto, inicando Obesidade III. Busque ajuda profissonal para abaixa-lo.";
				}
			?>
			<div class="cards-evolucao">
				<?php
					$consulta_anamnese = mysqli_query($cn, "SELECT * FROM anamnese WHERE id_usuario = '$id'");
					$exibe_anamnese = mysqli_fetch_all($consulta_anamnese, MYSQLI_ASSOC);
				?>
				<section class="aproveitamento-evolucao">
					<h3>Informações Atuais</h3>
					<p class="p-atencao"><?php echo $msg_imc;?></p>

					<?php
						if($exibe_anamnese[0]['pressao_anamnese'] == 'alta' || $exibe_anamnese[0]['pressao_anamnese'] == 'baixa'){
							echo "<p>Meda sempre sua pressão e não deixe de ir em consultas para ver se está tudo bem.</p>";
						}
						if($exibe_anamnese[0]['lesao_anamnese'] == 'sim'){
							echo "<p>Tenha mais precalção ao realizar os alongamentos, mas nunca deixe de se movimentar.</p>";
						}
						if($exibe_anamnese[0]['diabetes_anamnese'] == 'sim'){
							echo "<p>Fique sempre atento para alterações na sua diabetes.</p>";
						}
						if($exibe_anamnese[0]['dorpeito_anamnese'] == 'sim'){
							echo "<p>Fique atento as dores no peito. Caso persistam avise seu médico.</p>";
						}
					?>
				</section>

				<section class="numeros-evolucaouser">
					<div class="ntreinos-evolucao">
						<div class="numero-videos">

							<?php
								if($Nexercicios < 10){
									echo "<h1>0".$Nexercicios."</h1>";
								}
								else{
									echo "<h1>".$Nexercicios."</h1>";
								}
							?>
							
							<h5>Alongamentos Feitos</h5>
						</div>
						<div class="numero-desafios">
							<h1>00</h1>
							<h5>Desafios Feitos</h5>
						</div>
					</div>
					<div class="grafico-evolucao">
						<?php include ("./graficos/grafico-autoavaliacao.php")?>
						<h5>Autoavaliação</h5>
					</div>
				</section>
			</div>
		</div>

		<div class="maistreinos">
			<h2 class="titulo-sections">Meus Favoritos</h2>
			<div class="cards-exercicios">
				<div class="card-exercicios">
					<div class="desc-exercicios">
						<div class="topo-desc-exercicios">
							<h2>Articulações Nível 1</h2>
						</div>
						<div class="descricao-exercicio">
							<p>O movimentar das articulações é muito importante para estimular a memória corporal e fazer com que não atrofiem.</p>
							<p>Aqui temos exercícios muito fáceis de serem feitos, sendo indicados principalmente para aquelas pessoas que estão começando agora o hábito de se alongar todos os dias.</p>
							<p>Duração: 11 min</p>
							<p>Equipamentos: ...</p>
						</div>
						<div class="favoritar">
							<div class="tipo-maisteinos">
								<p>Articulações</p>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
	  							<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
							</svg>
						</div>
					</div>
					<img src="../../imgs/img-inicio.png">
				</div>

				<div class="card-exercicios">
					<div class="desc-exercicios">
						<h2>Articulações Nível 1</h2>
						<div class="descricao-exercicio">
							<p>O movimentar das articulações é muito importante para estimular a memória corporal e fazer com que não atrofiem.</p>
							<p>Aqui temos exercícios muito fáceis de serem feitos, sendo indicados principalmente para aquelas pessoas que estão começando agora o hábito de se alongar todos os dias.</p>
							<p>Duração: 11 min</p>
							<p>Equipamentos: ...</p>
						</div>
						<div class="favoritar">
							<div class="tipo-maisteinos">
								<p>Articulações</p>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
	  							<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
							</svg>
						</div>
					</div>
					<img src="../../imgs/img-inicio.png">
				</div>

				<div class="card-exercicios">
					<div class="desc-exercicios">
						<h2>Articulações Nível 1</h2>
						<div class="descricao-exercicio">
							<p>O movimentar das articulações é muito importante para estimular a memória corporal e fazer com que não atrofiem.</p>
							<p>Aqui temos exercícios muito fáceis de serem feitos, sendo indicados principalmente para aquelas pessoas que estão começando agora o hábito de se alongar todos os dias.</p>
							<p>Duração: 11 min</p>
							<p>Equipamentos: ...</p>
						</div>
						<div class="favoritar">
							<div class="tipo-maisteinos">
								<p>Articulações</p>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
	  							<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
							</svg>
						</div>
					</div>
					<img src="../../imgs/img-inicio.png">
				</div>
			</div>
		</div>
	</section>

	<!-- <section class="primeiro-acesso">
		<form>
			<div class="container-form-anamnese">
				<h2>Anamnese</h2>

				<div class="perguntas-anamnese">
					<p>Você fuma?</p>
					<div class="inputs-anamnese">
						<div class="input-anamnese">
							<input type="radio" name="fumante" value="sim">
							<label>Sim</label>
						</div>
						<div class="input-anamnese">
							<input type="radio" name="fumante" value="não">
							<label>Não</label>
						</div>
					</div>
				</div>

				<div class="perguntas-anamnese">
					<p>Como está a pressão alta?</p>
					<div class="inputs-anamnese">
						<div class="input-anamnese">
							<input type="radio" name="pressao" value="alta">
							<label>Pressão Alta</label>
						</div>
						<div class="input-anamnese">
							<input type="radio" name="pressao"value="baixa">
							<label>Pressão Baixa</label>
						</div>
						<div class="input-anamnese">
							<input type="radio" name="pressao"value="normal">
							<label>Normal</label>
						</div>
					</div>
				</div>

				<div class="perguntas-anamnese">
					<p>Possuí diabéticos na família?</p>
					<div class="inputs-anamnese">
						<div class="input-anamnese">
							<input type="radio" name="diabetes" value="sim">
							<label>Sim</label>
						</div>
						<div class="input-anamnese">
							<input type="radio" name="diabetes"value="não">
							<label>Não</label>
						</div>
					</div>
				</div>

				<div class="perguntas-anamnese">
					<p>Possuí algum problema cardíaco?</p>
					<div class="inputs-anamnese">
						<div class="input-anamnese">
							<input type="radio" name="problemas-cardiacos" value="sim">
							<label>Sim</label>
						</div>
						<div class="input-anamnese">
							<input type="radio" name="problemas-cardiacos"value="não">
							<label>Não</label>
						</div>
					</div>
				</div>

				<div class="perguntas-anamnese">
					<p>Possuí alguma lesão ou problema ortopédico?</p>
					<div class="inputs-anamnese">
						<div class="input-anamnese">
							<input type="radio" name="lesao" value="sim">
							<label>Sim</label>
						</div>
						<div class="input-anamnese">
							<input type="radio" name="lesao"value="não">
							<label>Não</label>
						</div>
					</div>
				</div>

				<div class="perguntas-anamnese">
					<p>Pratica alguma atividade física regularmente?</p>
					<div class="inputs-anamnese">
						<div class="input-anamnese">
							<input type="radio" name="praticaatividade" value="sim">
							<label>Sim</label>
						</div>
						<div class="input-anamnese">
							<input type="radio" name="praticaatividade"value="não">
							<label>Não</label>
						</div>
					</div>
				</div>

				<div class="perguntas-anamnese">
					<p>Sente dores no peito ao praticar alguma atividade?</p>
					<div class="inputs-anamnese">
						<div class="input-anamnese">
							<input type="radio" name="dornopeito" value="sim">
							<label>Sim</label>
						</div>
						<div class="input-anamnese">
							<input type="radio" name="dornopeito"value="não">
							<label>Não</label>
						</div>
					</div>
				</div>

				<div class="btn-anamnese">
					<button type="submit">Enviar</button>
				</div>
			</div>
		</form>
	</section> -->

	<?php
		include ("./form-anamnese.php");
	?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
	<script src="../../js/js-user.js"></script>

	<script>
		addEventListener('DOMContentLoaded', () => {
			const queryString = window.location.search;
			const urlParams = new URLSearchParams(queryString);
			const formParametro = urlParams.get('form')
			if(!!formParametro) {
				const form = document.querySelector(".form-anamnese")
				form.classList.add("active")
			} else {
				const form = document.querySelector(".form-anamnese")
				form.classList.remove("active")

			}

			// calendar
			const calendarEl = document.querySelector(".calendario-evolucao");
	        const calendar = new FullCalendar.Calendar(calendarEl, {
	          initialView: 'dayGridMonth',
	          resources: [
			    // your resource list
			  ]
	        });
	        calendar.render();

		})

		function tirarForm(){
			const form = document.querySelector(".form-anamnese")
				form.classList.remove("active")
		}
	</script>

</body>
</html>