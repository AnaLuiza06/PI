<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>ATIV</title>

	<!-- style bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../css/style-usua.css">
</head>
<body>

	<?php
		session_start();

		require ('../conexao/conexao.php');

		if (empty($_SESSION['ID'])) {
			echo '<script>window.location="../inicio/login.php"</script>';
		}
		else{
			$id = $_SESSION['ID'];
			$sql = "select * from usuario where id_usuario = '$id'";
			$consulta = mysqli_query($cn, $sql);
	 		$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
		}
	?>

	<div class="menu-pageuser">
			<div class="menu-logo">
				<h2>A T I V</h2>
			</div>
			<div class="menu-links">
				<ul>
					<li><a href="#">Minha Área</a></li>
					<li><a href="#">Desafios</a></li>
					<li><a href="./mais-alongamentos.php">Alongamentos</a></li>
					<li><a href="#">Favoritos</a></li>
					<li><a href="#">Ajuda</a></li>
				</ul>
			</div>
			<div class="menu-identificacao">
				<h5><?php echo $exibe[0]['nome_usuario'];?></h5>
				<img src="https://essaseoutras.com.br/wp-content/uploads/2011/01/gatinhos-fofinhos-3.jpg">
			</div>
	</div>

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
			<h2>Desafio Atual</h2>

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
			<h2>Minha Evolução</h2>

			<?php
				$sql = "SELECT * FROM autoavaliacao where id_usuario = '$id'";
				$consulta = mysqli_query($cn, $sql);
				$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

				$Nexercicios = count($exibe);

			?>

			<div class="cards-evolucao">
				<section class="aproveitamento-evolucao">
					<div class="grafico-evolucao" id="evolucao">
						<div class="graficopizza"></div>
						<h5>Aproveitamento</h5>
					</div>
				</section>
				<section class="calendario-evolucao">
					<p>Março/2022</p> <!-- mes que está sendo realizado o treino -->
					<div class="container-calendario">
						<!-- calendario -->
					</div>
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
							<h1>01</h1>
							<h5>Desafios Feitos</h5>
						</div>
					</div>
					<div class="grafico-evolucao">
						<div class="graficopizza" id="autoavaliacao"></div>
						<h5>Autoavaliação</h5>
					</div>
				</section>
			</div>
		</div>

		<div class="maistreinos">
			<h2 class="titulo-maistreinos">Meus Favoritos</h2>
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

	<section class="primeiro-acesso">
		<form>
			<div class="container-form-anamnese">
				<h2>Anamnese</h2>
				
				<div class="perguntas-anamnese">
					<p>Possuí algum problema cardiovascular?</p>
					<div class="inputs-anamnese">
						<div class="input-anamnese">
							<input type="radio" name="problemas-cardiovasculares" value="sim">
							<label>Sim</label>
						</div>
						<div class="input-anamnese">
							<input type="radio" name="problemas-cardiovasculares"value="não">
							<label>Não</label>
						</div>
					</div>
				</div>

				<div class="perguntas-anamnese">
					<p>Fuma?</p>
					<div class="inputs-anamnese">
						<div class="input-anamnese">
							<input type="radio" name="fumaante" value="sim">
							<label>Sim</label>
						</div>
						<div class="input-anamnese">
							<input type="radio" name="fumaante"value="não">
							<label>Não</label>
						</div>
					</div>
				</div>

				<div class="perguntas-anamnese">
					<p>Tem algum tipo de lesão ou problemas ortopédicos?</p>
					<div class="inputs-anamnese">
						<div class="input-anamnese">
							<input type="radio" name="problemas-ortopedicos" value="sim">
							<label>Sim</label>
						</div>
						<div class="input-anamnese">
							<input type="radio" name="problemas-ortopedicos"value="não">
							<label>Não</label>
						</div>
					</div>
				</div>

				<div class="perguntas-anamnese">
					<p>Pratica alguma atividade física regularmente?</p>
					<div class="inputs-anamnese">
						<div class="input-anamnese">
							<input type="radio" name="pessoa-ativa" value="sim">
							<label>Sim</label>
						</div>
						<div class="input-anamnese">
							<input type="radio" name="pessoa-ativa"value="não">
							<label>Não</label>
						</div>
					</div>
				</div>

				<div class="perguntas-anamnese">
					<p>Sente dores no peito quando pratica alguma atividade física?</p>
					<div class="inputs-anamnese">
						<div class="input-anamnese">
							<input type="radio" name="dor-peito" value="sim">
							<label>Sim</label>
						</div>
						<div class="input-anamnese">
							<input type="radio" name="dor-peito"value="não">
							<label>Não</label>
						</div>
					</div>
				</div>

				<div class="perguntas-anamnese">
					<p>Faz uso continuo de algum medicamento?</p>
					<div class="inputs-anamnese">
						<div class="input-anamnese">
							<input type="radio" name="medicamento-continuo" value="sim">
							<label>Sim</label>
						</div>
						<div class="input-anamnese">
							<input type="radio" name="medicamento-continuo"value="não">
							<label>Não</label>
						</div>
					</div>
				</div>

				<div class="btn-anamnese">
					<button type="submit">Enviar</button>
				</div>
			</div>
		</form>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="../../js/js-user.js"></script>

</body>
</html>