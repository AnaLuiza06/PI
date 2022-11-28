<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ATIV</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../css/style-md.css">

</head>

<body>

	<?php
	include('../conexao/conexao.php');
	?>

	<div class="container-cadastro">
		<section class="txt-login">
			<h1>Cadastre-se Agora Mesmo!!</h1>
			<h2>Crie sua conta e comece hoje mesmo a ter uma vida mais ativa.</h2>
		</section>
		<section class="form-login">
			<div class="card-existe">
				<p>Você ainda nâo possui Cadastro</p>
			</div>
			<div class="card-cadastro">
				<form method="post" action="../conexao/inserts/iusuario.php">
					<h2>Cadastro</h2>

					<div class="input-form-cadastro">
						<label for="labelnome" id="labelnome">Nome</label>
						<input type="text" name="nome" id="inputnome" placeholder="Exemplo: Maria Antônia">
					</div>
					<div class="input-form-cadastro">
						<label for="labelemail">Email</label>
						<input type="email" name="email" id="inputemail" placeholder="Exemplo: maria@exemplo.com">
					</div>
					<div class="input-form-cadastro">
						<label for="labelnascimento">Data de Nascimento</label>
						<input type="date" name="nascimento" id="inputnascimento">
					</div>
					<div class="input-form-cadastro">
						<div class="container-inputduplo">
							<div class="inputduplo-cadastro">
								<label for="labelpeso">Peso</label>
								<input type="text" name="peso" id="inputpeso" placeholder="Exemplo: 70.6" onchange="setValueInputPeso(event)">
							</div>
							<div class="inputduplo-cadastro">
								<label for="labelaltura">Altura</label>
								<input type="text" name="altura" id="inputaltura" placeholder="Exemplo: 1.65" onchange="setValueInputAltura(event)">
							</div>
						</div>
					</div>
					<div class="input-form-cadastro">
						<div class="container-inputduplo">
							<div class="inputduplo-cadastro">
								<label>Senha</label>
								<input type="password" name="senha">
							</div>
							<div class="inputduplo-cadastro">
								<label>Repita a Senha</label>
								<input type="password" name="repetirsenha">
							</div>
						</div>
					</div>
					<button onclick="" type="submit">Entrar</button>
				</form>
			</div>
			<div class="sombra-5"></div>
			<div class="sombra-6"></div>
		</section>
	</div>

	<!-- <script src="../../js/js-inicio.js"></script> -->
	<script type="text/javascript">
		const inputPeso = document.querySelector('#inputpeso');
		const inputAltura = document.querySelector("#inputaltura")

		function formatValue(value = "") {
			const num = value.replace(/\D/g, "")
			const numbers = num.replace(/(^\d{2})(\d{1,2})/, "$1.$2")
			return numbers
		}

		function setValueInputPeso(event) {
			const value = String(event.target.value)
			const numbers = formatValue(value);
			inputPeso.value = numbers
		}

		function setValueInputAltura(event) {
			const value = String(event.target.value)
			const num = value.replace(/\D/g, "")
			const numbers = num.replace(/(^\d{1})(\d{1,2})/, "$1.$2")
			inputAltura.value = numbers
		}
	</script>
</body>

</html>