<?php
// get server name from URL
$server = $_SERVER['SERVER_NAME'];
if ($server == 'localhost') {
  $servidor = 'localhost';
  $usuario = 'root';
  $senha = '';
  $banco = 'bd_ativ';
} else {
  $servidor = 'sql113.epizy.com';
  $usuario = 'epiz_32816813';
  $senha = 'DE6dUvssUGIdRiE';
  $banco = 'epiz_32816813_bd_ativ';
}

$cn = mysqli_connect($servidor, $usuario, $senha, $banco);
