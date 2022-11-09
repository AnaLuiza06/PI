<?php 
	
	include ('../conexao.php');

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

	 $consulta = mysqli_query($cn, "SELECT * FROM ajuda WHERE pergunta_ajuda = '$pergunta'");
	 $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

	 // echo count($exibe);

	if (count($exibe) >= 1) {
		//echo "usuário já cadastrado";
		echo "<script>window.location='../../adm/formsAdd/addajuda.php?adcionado=false'</script>";
	} else{
		// echo "Usuário NÃO cadastrado";
		$sql = "INSERT INTO `ajuda`(`perguta_ajuda`, `p1_ajuda`, `img1_ajuda`, `p2_ajuda`, `img2_ajuda`, `p3_ajuda`, `img3_ajuda`, `p4_ajuda`, `img4_ajuda`, `p5_ajuda`, `img5_ajuda`) VALUES ('$pergunta','$p1','$img1','$p2','$img2','$p3','$img3','$p4','$img4','$p5','$img5')";
		$incluir = mysqli_query($cn, $sql);
		 echo "<script>window.location='../../adm/formsAdd/addajuda.php?adcionado=true'</script>";
	}
