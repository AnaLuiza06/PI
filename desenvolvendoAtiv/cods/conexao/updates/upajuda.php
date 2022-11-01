<?php 
	
	include ('../conexao.php');

	$id = $_GET['cd'];
	$pergunta = $_POST['pergunta'];
	$p1 = $_POST['p1'];
	$img1 = $_POST['img1'];
	$p2 = $_POST['p2'];
	$img2 = $_POST['img2'];
	$p3 = $_POST['p3'];
	$img3 = $_POST['img3'];
	$p4 = $_POST['p4'];
	$img4 = $_POST['img4'];
	$p5 = $_POST['p5'];
	$img5 = $_POST['img5'];

	$atualizar = mysqli_query($cn, "UPDATE `ajuda` SET `perguta_ajuda`='$pergunta',`p1_ajuda`='$p1',`img1_ajuda`='$img1',`p2_ajuda`='$p2',`img2_ajuda`='$img2',`p3_ajuda`='$p3',`img3_ajuda`='$img3',`p4_ajuda`='$p4',`img4_ajuda`='$img4',`p5_ajuda`='$p5',`img5_ajuda`='$img5' WHERE `id_ajuda` = '$id'");

	header("Location: ../../adm/formsUpdate/altajuda.php?cd=".$id."");

?>