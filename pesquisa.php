<?php

header('Content-type: application/json');
require_once('funcoes.php');

$result = $_REQUEST['dado'];
$array = $result; //array($result);
$resultjs =  buscarUsuario($conexao,$array);

if($resultjs){
  $rest =  ['ret'=>true];
  //array_push($resultjs,$rest);
  echo json_encode($resultjs);
  

}else{
  $rest =  ['ret'=>false];
  //array_push($resultjs,$rest);
  echo json_encode($resultjs);
  

  //header("HTTP/1.1 404 Bad Request");
  echo "Não Existe Animais Com Esse Nome";
}

?>