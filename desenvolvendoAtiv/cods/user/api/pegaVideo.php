<?php
require "../../conexao/conexao.php";
$id = $_GET['id'];
$sql = "SELECT * FROM `exercicio` WHERE `id_exercicio` = '$id'";
$consulta = mysqli_query($cn, $sql);
$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

echo json_encode($exibe);
