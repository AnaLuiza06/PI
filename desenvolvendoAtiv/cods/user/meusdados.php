<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>ATIV</title>

	<!-- style bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-usua.css">
</head>
<body>

	<?php
        include ('../conexao/conexao.php');
        include ('./menu.php');
        // include menu

        // Acessar Dados
    ?>

	<section class="imguser">
		<div class="txt-imguser">
			<h1>Olá, Lenira!</h1>
			<h4>Escolha um exercício ou continue o desafio escolhido. Vamos nos exercitar!!</h4>
		</div>
		<img src="https://img.freepik.com/fotos-gratis/casal-de-idosos-fazendo-exercicios-em-casa_23-2148730109.jpg">
	</section>

	<section class="minhaarea-usua">
		<div class="form-dadospessoais">
			<h2>Dados Pessoais</h2>
			<form>
				<div class="form-row">
					<div>
						<label>Nome</label>
						<input type="text" name="nome">
					</div>
					<div>
						<label>Email</label>
						<input type="email" name="email">
					</div>
				</div>
				<div class="form-row">
					<div>
						<label>Data de Nascimento</label>
						<input type="date" name="nascimento">
					</div>
					<div>
						<label>Senha</label>
						<input type="password" name="senha">
					</div>
				</div>
				<div class="form-row">
					<div>
						<label>Peso</label>
						<input type="number" name="peso">
					</div>
					<div>
						<label>Altura</label>
						<input type="number" name="altura">
					</div>
				</div>
				<div class="btn-alterar">
					<button>Alterar</button>
				</div>
			</form>
		</div>

		<div class="form-dadospessoais">
			<h2>Anamnese</h2>
			<form>
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
				<div class="btn-alterar">
					<button>Alterar</button>
				</div>
			</form>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>