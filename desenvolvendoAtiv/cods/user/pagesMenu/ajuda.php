<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>ATIV</title>

	<!-- style bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-usua.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-usua-pagesmenu.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-md.css">
</head>

<body>

	<?php
	include('../../conexao/conexao.php');
	include('./menu.php');
	// include menu
	?>

	<section class="imguser">
		<div class="txt-imguser">
			<h1>Precisa de Ajuda?</h1>
			<h4>Veja as respostas para as principais dúvidas sobre o sistema da ATIV, podendo também manda a sua, caso não esteja listada abaixo.</h4>
		</div>
		<img src="https://img.freepik.com/foto-gratis/tiro-completo-mujer-sentada-estera-yoga_23-2148916971.jpg?w=1060&t=st=1669225054~exp=1669225654~hmac=6ade0088243ad633efa10e75bb87a5066141aab8e8e8d7cf60eafd90c4e038d7">
		<div class="background-user"></div>
	</section>

	<section class="minhaarea-usua">
		<?php
		// Acessar Dados
		$consulta_ajuda = mysqli_query($cn, "SELECT * from ajuda");
		$exibe_ajuda = mysqli_fetch_all($consulta_ajuda, MYSQLI_ASSOC);

		for ($i = 0; $i < count($exibe_ajuda); $i++) {
		?>
			<div class="card-ajuda">
				<div class="titulo-ajuda">
					<h2><?php echo $exibe_ajuda[$i]['perguta_ajuda']; ?></h2>
					<button onclick="mostrarmais()" class="button-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
						</svg>
					</button>
					<button onclick="mostrarmaisMD()" class="button-md">
						<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
						</svg>
					</button>
				</div>

				<div class="desc-ajuda">
					<div class="mostrar-div">
						<p><?php echo $exibe_ajuda[$i]['p1_ajuda']; ?></p>
						<img src="<?php echo $exibe_ajuda[$i]['img1_ajuda']; ?>">
					</div>
					<?php
					if ($exibe_ajuda[$i]['p2_ajuda'] == "") {
						echo "";
					} else {
						echo "	<div class='mostrar-div'>
									<img src='" . $exibe_ajuda[$i]['img2_ajuda'] . "'> 
									<p>" . $exibe_ajuda[$i]['p2_ajuda'] . "</p>
								</div>";
					}

					if ($exibe_ajuda[$i]['p3_ajuda'] == "") {
						echo "";
					} else {
						echo "	<div class='mostrar-div'>
									<p>" . $exibe_ajuda[$i]['p3_ajuda'] . "</p>
									<img src='" . $exibe_ajuda[$i]['img3_ajuda'] . "'> 
								</div>";
					}

					if ($exibe_ajuda[$i]['p4_ajuda'] == "") {
						echo "";
					} else {
						echo "	<div class='mostrar-div'>
									<img src='" . $exibe_ajuda[$i]['img4_ajuda'] . "'> 
									<p>" . $exibe_ajuda[$i]['p4_ajuda'] . "</p>
								</div>";
					}

					if ($exibe_ajuda[$i]['p5_ajuda'] == "") {
						echo "";
					} else {
						echo "	<div class='mostrar-div'>
									<p>" . $exibe_ajuda[$i]['p5_ajuda'] . "</p>
									<img src='" . $exibe_ajuda[$i]['img5_ajuda'] . "'> 
								</div>";
					}
					?>
				</div>

				<div class="desc-ajuda-md">
					<div class="mostrar-div">
						<p><?php echo $exibe_ajuda[$i]['p1_ajuda']; ?></p>
						<img src="<?php echo $exibe_ajuda[$i]['img1_ajuda']; ?>">
					</div>
					<?php
					if ($exibe_ajuda[$i]['p2_ajuda'] == "") {
						echo "";
					} else {
						echo "	<div class='mostrar-div'>
									<p>" . $exibe_ajuda[$i]['p2_ajuda'] . "</p>
									<img src='" . $exibe_ajuda[$i]['img2_ajuda'] . "'> 
								</div>";
					}

					if ($exibe_ajuda[$i]['p3_ajuda'] == "") {
						echo "";
					} else {
						echo "	<div class='mostrar-div'>
									<p>" . $exibe_ajuda[$i]['p3_ajuda'] . "</p>
									<img src='" . $exibe_ajuda[$i]['img3_ajuda'] . "'> 
								</div>";
					}

					if ($exibe_ajuda[$i]['p4_ajuda'] == "") {
						echo "";
					} else {
						echo "	<div class='mostrar-div'>
									<p>" . $exibe_ajuda[$i]['p4_ajuda'] . "</p>
									<img src='" . $exibe_ajuda[$i]['img4_ajuda'] . "'> 
								</div>";
					}

					if ($exibe_ajuda[$i]['p5_ajuda'] == "") {
						echo "";
					} else {
						echo "	<div class='mostrar-div'>
									<p>" . $exibe_ajuda[$i]['p5_ajuda'] . "</p>
									<img src='" . $exibe_ajuda[$i]['img5_ajuda'] . "'> 
								</div>";
					}
					?>
				</div>

				<div class="btn-mais-ajuda">

				</div>
			</div>

		<?php
		}

		?>

		<div class="card-form-ajuda">
			<div class="desc-card-form-ajuda">
				<h2>Caso sua Dúvida não esteja listada acima, nos envie para que possamos ajudar!</h2>
			</div>
			<div>
				<form method="post" action="../../conexao/inserts/iajuda-user.php?cd=<?php echo $_SESSION['ID']; ?>">
					<textarea type="text" rows="6" cols="50" name="mensagem" placeholder="Digite sua mensagem" maxlength="100"></textarea>
					<div>
						<button type="submit">Enviar</button>
					</div>
				</form>
			</div>
		</div>

		<?php
		include("./footer.php");
		?>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="../../../js/js-menu.js"></script>
	<script>
		function mostrarmais() {
			const cardAjuda = document.querySelector(".card-ajuda")
			cardAjuda.classList.toggle("active")

			const descAjuda = document.querySelector(".desc-ajuda")
			descAjuda.classList.toggle("active")

			const descAjudamd = document.querySelector(".desc-ajuda-md")
			descAjudamd.classList.toggle("active")
		}

		function mostrarmaisMD() {

			const descAjudamd = document.querySelector(".desc-ajuda-md")
			descAjudamd.classList.toggle("active")
		}
	</script>

</body>

</html>