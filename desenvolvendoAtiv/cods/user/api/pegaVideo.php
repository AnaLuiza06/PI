
<?php
require "../../conexao/conexao.php";
header('Content-Type: text/html; charset=utf-8');

$id = $_GET['id'];
$sql = "SELECT * FROM `exercicio` WHERE `id_exercicio` = '$id'";
$consulta = mysqli_query($cn, $sql);
$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

function convert_exibe_in_charset_utf8(array $data) {
    $resultado = array();
    foreach($data as $key => $value ) {
        if(is_array($value)) {
            $resultado[$key] = convert_exibe_in_charset_utf8($value);
        } else {
            $resultado[$key] = mb_convert_encoding($value, 'UTF-8', 'UTF-8');
        }
    }
    return $resultado;
}

$exibe = convert_exibe_in_charset_utf8($exibe);

echo json_encode($exibe);
