<?php
header('Content-type: application/json');
require_once('funcoes.php');

$usuarios = listarUsuarios($conexao);
if($usuarios){
  echo json_encode($usuarios);

}else {
  echo("Não Existe Usuarios");
}








?>