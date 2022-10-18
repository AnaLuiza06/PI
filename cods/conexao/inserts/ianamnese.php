<?php 
	
	include ('../conexao.php');

	$id = $_GET['cd'];
	$fumante = $_POST['fumante'];
	$pressao = $_POST['pressao'];
	$diabetes = $_POST['diabetes'];
	$problemascardiacos = $_POST['problemas-cardiacos'];
	$lesao = $_POST['lesao'];
	$praticaatividade = $_POST['praticaatividade'];
	$dornopeito = $_POST['dornopeito'];

	 $consulta = mysqli_query($cn, "SELECT * FROM anamnese WHERE id_usuario = '$id'");
	 $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

	 // echo count($exibe);

	if (count($exibe) >= 1) {
		echo "<script>window.location='../../user/indexuser.php'</script>";
	} else{
		$incluir = mysqli_query($cn, "INSERT INTO `anamnese`(`id_usuario`, `fumante_anamnese`, `pcardiaco_anamnese`, `pressao_anamnese`, `diabetes_anamnese`, `lesao_anamnese`, `ativo_anamnese`, `dorpeito_anamnese`) VALUES ('$id','$fumante','$problemascardiacos','$pressao','$diabetes','$lesao','$praticaatividade','$dornopeito')");
		 echo "<script>window.location='../../user/indexuser.php'</script>";
	}

?>