<?php

require_once('funcoes.php');
$json = file_get_contents('php://input');
$data = json_decode($json);


    //$resulado =  var_dump($data);
    
    $nome = $data->nome;
    $descricao = $data->descricao; 
    $array = array($nome, $descricao);
    $result = inserirAnimias($conexao,$array);
    if($result){
        $result = (object) ['ret'=>true];  // Array associativos                    
        echo json_encode($result);

    }else{
        $result = (object) ['ret'=>false];  // Array associativos                    
        echo json_encode($result);
    }
  



?>