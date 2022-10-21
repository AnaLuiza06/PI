<?php
		session_start();

		include ('../conexao/conexao.php');

		if (empty($_SESSION['ID'])) {
			echo '<script>window.location="../inicio/login.php"</script>';
		}
		else{
			$id = $_SESSION['ID'];
			$sql = "select * from adm where id_adm = '$id'";
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
					<li><a href="./indexadm.php">Minha Área</a></li>
					<li><a href="./pagesMenu/administradores.php">Adiministradores</a></li>
					<li><a href="./pagesMenu/desafios.php">Desafios</a></li>
					<li><a href="./pagesMenu/alongamentos.php">Alongamentos</a></li>
					<li><a href="./pagesMenu/ajuda.php">Ajuda</a></li>
					<li><a href="./pagesMenu/sair.php">Sair</a></li>
				</ul>
			</div>
			<a href="./pagesMenu/meusdados.php" class="menu-identificacao">
				<h5><?php echo $exibe[0]['nome_adm'];?></h5>
				<img src="https://essaseoutras.com.br/wp-content/uploads/2011/01/gatinhos-fofinhos-3.jpg">
			</a>
	</div>