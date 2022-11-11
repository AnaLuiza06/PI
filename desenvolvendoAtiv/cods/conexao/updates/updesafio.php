<?php

require('../conexao.php');

$id = $_GET['cd'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
// $duracao = $_POST['duracao'];
$contraindocacoes = $_POST['contraindocacoes'];
$imagem = $_POST['imagem'];

$videos = isset($_POST['videos']) ? $_POST['videos']  : array(); // somente os vídeos selecionados

$duracao = count($videos);

$sql_atualiza_desafios = "UPDATE `desafios` SET `nome_desafios`='$nome',`desc_desafios`='$descricao',`duracao_desafios`='$duracao',`contra_indicacoes_desafio`='$contraindocacoes',`imagem_desafio`='$imagem' WHERE `id_desafios` = '$id'";

mysqli_query($cn, $sql_atualiza_desafios);

if (count($videos) <= 0) {
  $sql_deleta_videos = "DELETE FROM `videosDesafio` WHERE `id_desafio` = '$id'";
  mysqli_query($cn, $sql_deleta_videos);
  echo "<script>window.location='../../adm/formsAdd/adddesafio.php?adcionado=true'</script>";
}

$sql_selectiona_videos_desafios = "SELECT * FROM `videosDesafio` WHERE id_desafio = '$id'";


$consulta_videos_desafios = mysqli_query($cn, $sql_selectiona_videos_desafios);
$exibe_videos = mysqli_fetch_all($consulta_videos_desafios, MYSQLI_ASSOC);

$videos_existentes = array();

foreach ($exibe_videos as $video) {
  $videos_existentes[] = intval($video['id_video']);
}

$videos_inteiros = array();
foreach ($videos as $video) {
  $videos_inteiros[] = intval($video);
}


$videos_a_remover = array_diff($videos_existentes, $videos_inteiros);
$videos_a_adicionar = array_diff($videos_inteiros, $videos_existentes);


$sql_remove_videos = "DELETE FROM `videosDesafio` WHERE `id_desafio` = '$id' AND `id_video` IN (" . implode(',', $videos_a_remover) . ")";
$sql_adiciona_videos = "INSERT INTO `videosDesafio` (`id_desafio`, `id_video`) VALUES ";

foreach ($videos_a_adicionar as $video) {
  $sql_adiciona_videos .= "('$id', '$video'),";
}
$sql_adiciona_videos = substr($sql_adiciona_videos, 0, -1);

if (count($videos_a_remover) > 0) {
  mysqli_query($cn, $sql_remove_videos);
}

if (count($videos_a_adicionar) > 0) {
  mysqli_query($cn, $sql_adiciona_videos);
}

echo json_encode([
  "remover" => $videos_a_remover,
  "adicionar" => $videos_a_adicionar,
  "sql_remove_videos" => $sql_remove_videos,
  "sql_adiciona_videos" => $sql_adiciona_videos
]);

header("Location: ../../adm/pagesMenu/desafios.php?");
