<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>ATIV</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="../../css/style-inicio.css">

</head>
<body>

	<div class="container-login">
		<section class="txt-login">
			<h1>Bem Vindo(a) de Volta!!</h1>
			<h2>Acesse sua conta na ATIV e continue seus treinos!</h2>
		</section>
		<section class="form-login">
			<!-- <div class="card-existe">
				<p>Esse usuário já existe. Realize o login.</p>
			</div> -->
			<div class="card-msgErro">
				<p>Emaio e/ou senha invalidos.</p>
			</div>
			<div class="card-login">
				<form method="post" action="../conexao/validarlogin.php">
					<h2>Login</h2>

					<div class="input-form-login">
						<label>Email</label>
						<input type="email" name="email">
					</div>
					<div class="input-form-login">
						<label>Senha</label>
						<input type="password" name="senha">
					</div>
					<div class="links-form-login">
						<a href="#">Esqueci minha Senha</a>
						<a href="./cadastro.php">Ainda não tenho cadastro</a>
					</div>
					<button type="submit">Entrar</button>
				</form>
			</div>
		</section>
	</div>
	<script>
		// addEventListener('load', () => {
		// 	const queryString = window.location.search;
		// 	const urlParams = new URLSearchParams(queryString);
		// 	const existe = urlParams.get('existe')
		// 	if(Boolean(existe)) {
		// 		const card = document.querySelector(".card-existe")
		// 		card.classList.toggle("active")
		// 	}
		// })

		addEventListener('load', () => {
			const queryString = window.location.search;
			const urlParams = new URLSearchParams(queryString);
			const msgErro = urlParams.get('erro')
			if(!!msgErro) {
				const card = document.querySelector(".card-msgErro")
				card.classList.add("active")
			}
		})
	</script>
</body>
</html>