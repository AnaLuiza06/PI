<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>ATIV</title>

	<!-- style bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-usua.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-md.css">
</head>

<body>

	<?php
	include('../../conexao/conexao.php');
	include('./menu.php');
	// include menu

	// Acessar Dados
	$id = $_SESSION['ID'];

	$consulta = mysqli_query($cn, "SELECT * FROM usuario WHERE id_usuario = '$id'");
	$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

	$c_anamnese = mysqli_query($cn, "SELECT * FROM anamnese WHERE id_usuario = '$id'");
	$ex_anamnese = mysqli_fetch_all($c_anamnese, MYSQLI_ASSOC);
	?>

	<section class="imguser">
		<div class="txt-imguser">
			<h1>Acesse seus Dados</h1>
			<h4>Tenha acesso aos dados cadastrados, podendo fazer alterações quando quiser.</h4>
		</div>
		<img src="https://img.freepik.com/fotos-gratis/casal-de-idosos-fazendo-exercicios-em-casa_23-2148730109.jpg">
		<div class="background-user"></div>
	</section>

	<section class="minhaarea-usua">

		<?php

		$consulta_resposta = mysqli_query($cn, "SELECT * FROM `duvidaUsuario` WHERE `id_usuario` = '$id'");
		$exibe_respostas = mysqli_fetch_all($consulta_resposta, MYSQLI_ASSOC);
		if (count($exibe_respostas) > 0) :
			for ($i = 0; $i < count($exibe_respostas); $i++) :
				if ($exibe_respostas[$i]['id_adm'] > 0 and $exibe_respostas[$i]['status_duvida'] == 0) :
		?>
					<div class="card-respostas">
						<h3>Olá, <?php echo $exibe[0]['nome_usuario']; ?>!</h3>
						<p><?php echo $exibe_respostas[$i]['resposta_divida'] ?></p>
						<button><a href="../../conexao/updates/respostavista.php?cd=<?php echo $exibe_respostas[$i]['id_duvida']; ?>">Ok</a></button>
					</div>
		<?php
				endif;
			endfor;
		endif;
		?>


		<div class="form-dadospessoais">
			<h2>Dados Pessoais</h2>
			<form method="post" action="../../conexao/updates/updados.php?cd=<?php echo $id; ?>">
				<div class="form-row">
					<div>
						<label>Nome</label>
						<input type="text" name="nome" value="<?php echo $exibe[0]['nome_usuario']; ?>">
					</div>
					<div>
						<label>Email</label>
						<input type="email" name="email" value="<?php echo $exibe[0]['email_usario']; ?>">
					</div>
				</div>
				<div class="form-row">
					<div>
						<label>Data de Nascimento</label>
						<input type="date" name="nascimento" value="<?php echo $exibe[0]['nascimento_usuario']; ?>">
					</div>
					<div>
						<label>Senha</label>
						<input type="password" name="senha" value="<?php echo $exibe[0]['senha_usuario']; ?>">
					</div>
				</div>
				<div class="form-row">
					<div>
						<label>Peso</label>
						<input type="number" name="peso" value="<?php echo $exibe[0]['altura_usuario']; ?>">
					</div>
					<div>
						<label>Altura</label>
						<input type="number" name="altura" value="<?php echo $exibe[0]['peso_usuario']; ?>">
					</div>
				</div>
				<div class="btn-alterar">
					<button>Alterar</button>
				</div>
			</form>
		</div>

		<div class="form-dadospessoais">
			<h2>Anamnese</h2>
			<form method="post" action="../../conexao/updates/upanamnese.php?cd=<?php echo $id; ?>">
				<div class="perguntas-anamnese">
					<p>Você fuma?</p>
					<?php
					if ($ex_anamnese[0]['fumante_anamnese'] == 'sim') {
					?>
						<div class="inputs-anamnese">
							<div class="input-anamnese">
								<label><input type="radio" name="fumante" value="sim" checked>
								Sim</label>
							</div>
							<div class="input-anamnese">
								<label><input type="radio" name="fumante" value="nao">
								Não</label>
							</div>
						</div>

					<?php
					} else if ($ex_anamnese[0]['fumante_anamnese'] == 'nao') {
					?>
						<div class="inputs-anamnese">
							<div class="input-anamnese">
								<label><input type="radio" name="fumante" value="sim">
								Sim</label>
							</div>
							<div class="input-anamnese">
								<label><input type="radio" name="fumante" value="nao" checked>
								Não</label>
							</div>
						</div>

					<?php
					}
					?>

				</div>

				<div class="perguntas-anamnese">
					<p>Como está a pressão alta?</p>
					<?php
					if ($ex_anamnese[0]['pressao_anamnese'] == 'alta') {
					?>
						<div class="inputs-anamnese">
							<div class="input-anamnese">
								<label><input type="radio" name="pressao" value="alta" checked>
								Pressão Alta</label>
							</div>
							<div class="input-anamnese">
								<label><input type="radio" name="pressao" value="baixa">
								Pressão Baixa</label>
							</div>
							<div class="input-anamnese">
								<label><input type="radio" name="pressao" value="normal">
								Normal</label>
							</div>
						</div>
					<?php
					} else if ($ex_anamnese[0]['pressao_anamnese'] == 'baixa') {
					?>
						<div class="inputs-anamnese">
							<div class="input-anamnese">
								<label><input type="radio" name="pressao" value="alta">
								Pressão Alta</label>
							</div>
							<div class="input-anamnese">
								<label><input type="radio" name="pressao" value="baixa" checked>
								Pressão Baixa</label>
							</div>
							<div class="input-anamnese">
								<label><input type="radio" name="pressao" value="normal">
								Normal</label>
							</div>
						</div>
					<?php
					} else if ($ex_anamnese[0]['pressao_anamnese'] == 'normal') {
					?>
						<div class="inputs-anamnese">
							<div class="input-anamnese">
								<label><input type="radio" name="pressao" value="alta">
								Pressão Alta</label>
							</div>
							<div class="input-anamnese">
								<label><input type="radio" name="pressao" value="baixa">
								Pressão Baixa</label>
							</div>
							<div class="input-anamnese">
								<label><input type="radio" name="pressao" value="normal" checked>
								Normal</label>
							</div>
						</div>
					<?php
					}
					?>
				</div>

				<div class="perguntas-anamnese">
					<p>Possuí diabéticos na família?</p>
					<?php
					if ($ex_anamnese[0]['diabetes_anamnese'] == 'sim') {
					?>
						<div class="inputs-anamnese">
							<div class="input-anamnese">
								<label><input type="radio" name="diabetes" value="sim" checked>
								Sim</label>
							</div>
							<div class="input-anamnese">
								<label><input type="radio" name="diabetes" value="nao">
								Não</label>
							</div>
						</div>
					<?php
					} else if ($ex_anamnese[0]['diabetes_anamnese'] == 'nao') {
					?>
						<div class="inputs-anamnese">
							<div class="input-anamnese">
								<label><input type="radio" name="diabetes" value="sim">
								Sim</label>
							</div>
							<div class="input-anamnese">
								<label><input type="radio" name="diabetes" value="nao" checked>
								Não</label>
							</div>
						</div>
					<?php
					}
					?>
				</div>

				<div class="perguntas-anamnese">
					<p>Possuí algum problema cardíaco?</p>
					<?php
					if ($ex_anamnese[0]['pcardiaco_anamnese'] == 'sim') {
					?>
						<div class="inputs-anamnese">
							<div class="input-anamnese">
								<label><input type="radio" name="problemas-cardiacos" value="sim" checked>
								Sim</label>
							</div>
							<div class="input-anamnese">
								<label><input type="radio" name="problemas-cardiacos" value="nao">
								Não</label>
							</div>
						</div>
					<?php
					} else if ($ex_anamnese[0]['pcardiaco_anamnese'] == 'nao') {
					?>
						<div class="inputs-anamnese">
							<div class="input-anamnese">
								<label><input type="radio" name="problemas-cardiacos" value="sim">
								Sim</label>
							</div>
							<div class="input-anamnese">
								<label><input type="radio" name="problemas-cardiacos" value="nao" checked>
								Não</label>
							</div>
						</div>
					<?php
					}
					?>
				</div>

				<div class="perguntas-anamnese">
					<p>Possuí alguma lesão ou problema ortopédico?</p>
					<?php
					if ($ex_anamnese[0]['lesao_anamnese'] == 'sim') {
					?>
						<div class="inputs-anamnese">
							<div class="input-anamnese">
								<label><input type="radio" name="lesao" value="sim" checked>
								Sim</label>
							</div>
							<div class="input-anamnese">
								<label><input type="radio" name="lesao" value="nao">
								Não</label>
							</div>
						</div>
					<?php
					} else if ($ex_anamnese[0]['lesao_anamnese'] == 'nao') {
					?>
						<div class="inputs-anamnese">
							<div class="input-anamnese">
								<label><input type="radio" name="lesao" value="sim">
								Sim</label>
							</div>
							<div class="input-anamnese">
								<label><input type="radio" name="lesao" value="nao" checked>
								Não</label>
							</div>
						</div>
					<?php
					}
					?>
				</div>

				<div class="perguntas-anamnese">
					<p>Pratica alguma atividade física regularmente?</p>
					<?php
					if ($ex_anamnese[0]['ativo_anamnese'] == 'sim') {
					?>
						<div class="inputs-anamnese">
							<div class="input-anamnese">
								<label><input type="radio" name="praticaatividade" value="sim" checked>
								Sim</label>
							</div>
							<div class="input-anamnese">
								<label><input type="radio" name="praticaatividade" value="nao">
								Não</label>
							</div>
						</div>
					<?php
					} else if ($ex_anamnese[0]['ativo_anamnese'] == 'nao') {
					?>
						<div class="inputs-anamnese">
							<div class="input-anamnese">
								<label><input type="radio" name="praticaatividade" value="sim">
								Sim</label>
							</div>
							<div class="input-anamnese">
								<label><input type="radio" name="praticaatividade" value="nao" checked>
								Não</label>
							</div>
						</div>
					<?php
					}
					?>
				</div>

				<div class="perguntas-anamnese">
					<p>Sente dores no peito ao praticar alguma atividade?</p>
					<?php
					if ($ex_anamnese[0]['dorpeito_anamnese'] == 'sim') {
					?>
						<div class="inputs-anamnese">
							<div class="input-anamnese">
								<label><input type="radio" name="dornopeito" value="sim" checked>
								Sim</label>
							</div>
							<div class="input-anamnese">
								<label><input type="radio" name="dornopeito" value="nao">
								Não</label>
							</div>
						</div>
					<?php
					} else if ($ex_anamnese[0]['dorpeito_anamnese'] == 'nao') {
					?>
						<div class="inputs-anamnese">
							<div class="input-anamnese">
								<label><input type="radio" name="dornopeito" value="sim">
								Sim</label>
							</div>
							<div class="input-anamnese">
								<label><input type="radio" name="dornopeito" value="nao" checked>
								Não</label>
							</div>
						</div>
					<?php
					}
					?>
				</div>
				<div class="btn-alterar">
					<button type="submit">Alterar</button>
				</div>
			</form>
		</div>

		<?php
		include("./footer.php");
		?>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="../../js/js-user.js"></script>
	<script src="../../../js/js-menu.js"></script>

</body>

</html>