<?php
header('Content-type: application/json');
require_once('funcoes.php');
$json = file_get_contents('php://input');
//var_dump($json);

$ide = json_decode($json);
$array=array($ide->id);
$retorno = deletarUsuario($conexao, $array);

if($retorno){
  $result  = ['status'=>true];  // Array associativos                    
  echo json_encode($result);

}else {
  $result  = ['status'=>false];
  //echo var_dump($result);
  echo json_encode($result);
  
}









?>