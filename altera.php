<?php
require_once('funcoes.php');
$json = file_get_contents('php://input');
$data = json_decode($json);


    //$resulado =  var_dump($data);
    $id = data->ID;
    $nome = $data->NOME;
    $descricao = $data->DESCRI;

    $array = array($id,$nome, $descricao);
    inserirAnimias($conexao,$array);
    
  







?>