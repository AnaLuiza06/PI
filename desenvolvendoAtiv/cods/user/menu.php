	<?php

		include ('../conexao/conexao.php');
		session_start();

		if (empty($_SESSION['ID'])) {
			echo '<script>window.location="../inicio/login.php"</script>';
		}
		else{
			$id = $_SESSION['ID'];
			$sql = "SELECT * FROM usuario WHERE id_usuario = '$id'";
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
					<li><a href="./indexuser.php">Minha Área</a></li>
					<li><a href="./pagesMenu/mais-desafios.php">Desafios</a></li>
					<li><a href="./pagesMenu/mais-alongamentos.php">Exercícios</a></li>
					<li><a href="./pagesMenu/favoritos.php">Favoritos</a></li>
					<li><a href="./pagesMenu/ajuda.php">Ajuda</a></li>
					<li><a href="./pagesMenu/sair.php">Sair</a></li>
				</ul>
			</div>
			<a href="./pagesMenu/meusdados.php" class="menu-identificacao">
				<h5><?php echo $exibe[0]['nome_usuario'];?></h5>
				<img src="https://essaseoutras.com.br/wp-content/uploads/2011/01/gatinhos-fofinhos-3.jpg">
			</a>
	</div>

	<div class="header-md">
		<section>
			<div class="titulo-menu">
				<div class="img-logo">
					<h2>A T I V</h2>
				</div>
				<div class="icon-menu">
					<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-justify" viewBox="0 0 16 16">
					  <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
					</svg>
				</div>
			</div>
		</section>

		<section class="links-menu-md">
			<div class="menu-links">
				<ul>
					<li><a href="./indexuser.php">Minha Área</a></li>
					<li><a href="./pagesMenu/mais-desafios.php">Desafios</a></li>
					<li><a href="./pagesMenu/mais-alongamentos.php">Exercícios</a></li>
					<li><a href="./pagesMenu/favoritos.php">Favoritos</a></li>
					<li><a href="./pagesMenu/ajuda.php">Ajuda</a></li>
					<li><a href="./pagesMenu/sair.php">Sair</a></li>
				</ul>
			</div>
			<a href="./pagesMenu/meusdados.php" class="menu-identificacao">
				<h5><?php echo $exibe[0]['nome_usuario'];?></h5>
				<img src="https://essaseoutras.com.br/wp-content/uploads/2011/01/gatinhos-fofinhos-3.jpg">
			</a>
		</section>
	</div>