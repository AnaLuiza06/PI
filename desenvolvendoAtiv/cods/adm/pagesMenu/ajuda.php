<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ATIV</title>

	<!-- style bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-usua.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-usua-pagesmenu.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-adm.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-md.css">
</head>

<body>

	<?php
	include('../../conexao/conexao.php');
	include('./menu.php');
	// include menu
	$id_adm = $_SESSION['ID'];
	// Acessar Dados
	$consulta = mysqli_query($cn, "SELECT * from duvidaUsuario WHERE id_adm = '0'");
	$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

	$quantidade = count($exibe);
	?>

	<section class="imguser">
		<div class="txt-imguser">
			<h1>Ajuda</h1>
			<h4>Responda as dúvidas dos usuário além de inserir novos cards de ajuda.</h4>
			<button><a href="../formsAdd/addajuda.php?adcionado=entrada">Adicionar Ajuda</a></button>
		</div>
		<img src="https://img.freepik.com/foto-gratis/mujer-senior-tiro-completo-estar-activo_23-2148917035.jpg?w=1380&t=st=1669224595~exp=1669225195~hmac=0ee26529c6fe1f712973e1510facded27644fd6e46916925254c5cd2b14b21ea">
		<div class="background-user"></div>
	</section>

	<section class="minhaarea-usua">

		<div class="duvidas-user">
			<div class="cards-tabela">
				<?php

				if ($quantidade < 1) {
					echo "<h4>Não Há Dúvidas Não Respondidas</h4>";
				} else {
					for ($i = 0; $i < $quantidade; $i++) {
				?>
						<div class="card-tabela" onclick="expandeCard()">
							<!-- <section class="mgs-mini">
						<div class="nome-tabela">
							<h5><?php echo $exibe[$i]['id_usuario']; ?></h5>
						</div>
						<div class="mds-tabela">
							<p><?php echo $exibe[$i]['mensagem_duvida']; ?></p>
						</div>
						<div class="data-tabela">
							<p><?php echo $exibe[$i]['data_duvida']; ?></p>
						</div>
					</section> -->

							<section class="mgs-grande">
								<div class="mgs-duvida">
									<h5>Nome: <?php echo $exibe[$i]['id_usuario']; ?></h5>
									<h5>Data: <?php echo $exibe[$i]['data_duvida']; ?></h5>
									<p>
										<?php echo $exibe[$i]['mensagem_duvida']; ?>
									</p>
								</div>

								<div class="form-resposta">
									<form method="post" action="../../conexao/updates/respondeduvidas.php">
										<div class="inpts-escndidos">
											<input type="text" name="cod" value="<?php echo $exibe[$i]['id_duvida']; ?>">
											<input type="text" name="id_user" value="<?php echo $exibe[$i]['id_usuario']; ?>">
											<input type="date" name="data" value="<?php echo $exibe[$i]['data_duvida']; ?>">
											<input type="text" name="mensagem" value="<?php echo $exibe[$i]['mensagem_duvida']; ?>">
										</div>
										<div>
											<label>ID Administrador</label>
											<input type="text" name="id_adm" value="<?= $id_adm ?>">
										</div>
										<div>
											<label>Resposta</label>
											<textarea type="text" rows="6" cols="50" name="resposta" placeholder="Digite sua resposta" maxlength="100"></textarea>
										</div>
										<div class="btns-form">
											<button type="submit">Enviar</button>
										</div>
									</form>
								</div>
							</section>
						</div>
				<?php
					}
				}
				?>
			</div>
		</div>

		<div class="duvidas-inseridas">
			<h2 class="titulo-sections">Dúvidas Inseridas</h2>
			<?php

			$consulta_ajuda = mysqli_query($cn, "SELECT * from ajuda");
			$exibe_ajuda = mysqli_fetch_all($consulta_ajuda, MYSQLI_ASSOC);

			for ($i = 0; $i < count($exibe_ajuda); $i++) {
				$id_ajuda = $exibe_ajuda[$i]['id_ajuda'];
			?>
				<div class="card-ajuda">
					<div class="titulo-ajuda">
						<div>
							<h2><?php echo $exibe_ajuda[$i]['perguta_ajuda']; ?></h2>
							<p><?php echo $exibe_ajuda[$i]['p1_ajuda']; ?></p>
						</div>
						<div class="btns-tabela">
							<button><a href="../formsUpdate/altajuda.php?cd=<?php echo $id_ajuda; ?>">
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
										<path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
									</svg>
								</a></button>
							<button><a href="../../conexao/delete/delajuda.php?cd=<?php echo $id_ajuda; ?>">
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
										<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
									</svg>
								</a></button>
						</div>
					</div>
				</div>
			<?php
			}
			?>
		</div>

		<?php
		include("./footer.php");
		?>

	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script src="../../../js/tabela-ajuda.js"></script>
</body>

</html>