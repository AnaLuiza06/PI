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
	
	// Alteração
    $sql = "UPDATE `anamnese` SET `fumante_anamnese`='$fumante',`pcardiaco_anamnese`='$problemascardiacos',`pressao_anamnese`='$pressao',`diabetes_anamnese`='$diabetes',`lesao_anamnese`='$lesao',`ativo_anamnese`='$praticaatividade',`dorpeito_anamnese`='$dornopeito' WHERE `id_usuario` = '$id'";

		$alterar = mysqli_query($cn, $sql);
		echo "<script>window.location='../../user/pagesMenu/meusdados.php?'</script>";

    // Verificando alteração

?>