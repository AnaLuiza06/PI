<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>ATIV</title>

	<!-- style bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-usua.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-adm.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-md.css">
</head>
<body>

	<?php
        include ('../../conexao/conexao.php');
        include ('./menu.php');
        // include menu

        // Acessar Dados
        $id = $_SESSION['ID'];

        $consulta = mysqli_query($cn, "SELECT * FROM adm WHERE id_adm = '$id'");
        $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
        // print_r($exibe);
    ?>

	<section class="imguser">
		<div class="txt-imguser">
			<h1>Meus Dados</h1>
			<h4>Tenha acesso aos dados cadastrados, podendo fazer alterações quando quiser.</h4>
		</div>
		<img src="https://img.freepik.com/fotos-gratis/casal-de-idosos-fazendo-exercicios-em-casa_23-2148730109.jpg">
		<div class="background-user"></div>
	</section>

	<section class="minhaarea-usua">
		

		<div class="form-dadospessoais">
			<h2>Dados Pessoais</h2>
			<form method="post" action="../../conexao/updates/updados-adm.php?cd=<?php echo $id;?>">
				<div class="form-row">
					<div>
						<label>Nome</label>
						<input type="text" name="nome" value="<?php echo $exibe[0]['nome_adm'];?>">
					</div>
					<div>
						<label>Email</label>
						<input type="email" name="email" value="<?php echo $exibe[0]['email_adm'];?>">
					</div>
				</div>
				<div class="form-row">
					<div>
						<label>Data de Nascimento</label>
						<input type="date" name="nascimento" value="<?php echo $exibe[0]['nascimento_adm'];?>">
					</div>
					<div>
						<label>Senha</label>
						<input type="password" name="senha" value="<?php echo $exibe[0]['senha_adm'];?>">
					</div>
				</div>
				<div class="btn-alterar">
					<button type="submit">Alterar</button>
					<button><a href="../../conexao/delete/deldados.php?cd=<?php echo $id;?>">Deletar</a></button>
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

</body>
</html>