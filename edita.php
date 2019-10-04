<?php
  require_once('funcoes.php');
  header('Content-type: application/json');
  $json = file_get_contents('php://input');
  $data = json_decode($json);
  //echo var_dump($json);

  //$resulado =  var_dump($data);
  $id = $data->ID;
  $nome = $data->NOME;
  $descricao = $data->DESCRI;
  //echo ("Edita .php Dados de ID - nome - Descrição");
  //echo ($id);
  //echo ($nome);
  //echo ($descricao);
  

  $array = array($nome, $descricao,$id);
  $resultado = alterarUsuario($conexao,$array);
  //echo var_dump ($resultado);
  //die;
  if($resultado){
    $result = (object) ['ret'=>true];  // Array associativos                    
    echo json_encode($result);
    
  }else{
    $result  = (object) ['ret'=>false];  // Array associativos                    
   
    echo json_encode($result);
  }

?>





