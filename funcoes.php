<?php

try {
  $conexao = new PDO("pgsql:host=localhost; port=5432; dbname=Fetch_LPW; user=postgres; password=postgres");
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch(PDOException $e) {
          echo 'Error: ' . $e->getMessage();
}


function inserirAnimias($conexao,$array){
       try {
            $query = $conexao->prepare("insert into animais (nome, descricao) values (?, ?)");
            $usuario = $query->execute($array);
            return $usuario;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

}


function buscarUsuario($conexao,$array){
    try {
        //$query = $conexao->prepare("select * from animais where  nome like'%$nome%'");
        //$query = $conexao->prepare("select * from animais where nome= ?");
        //if($query->execute($array)){
            //$usuario = $query->fetchAll(PDO::FETCH_ASSOC); //coloca os dados num array $usuario
            //return $usuario;
        $query = $conexao->prepare("select * from animais where  nome like'%$array%'");
        if($query->execute()){
            $usuario = $query->fetchAll(); //coloca os dados num array $usuario
            return $usuario;
            
        }
        else{
            return false;
        }
        
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }  
}

function listarUsuarios($conexao){
    try {
      $query = $conexao->prepare("select * from animais");      
      $query->execute();
      $usuarios = $query->fetchAll();
      return $usuarios;
    }catch(PDOException $e) {
          echo 'Error: ' . $e->getMessage();
    }  
    
}


function deletarUsuario($conexao, $array){
    try {
        $query = $conexao->prepare("delete from animais where id = ?");
        $usuario = $query->execute($array);   
        return $usuario;
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

}


function alterarUsuario($conexao, $array){
    //echo "asdfasdf";die;
    try {
        $query = $conexao->prepare("update animais set  nome = ?, descricao= ? where id = ? ");
        //var_dump($array);
        //die;
        $usuario = $query->execute($array);   
        //var_dump($usuario);
        //die;
        return $usuario;
        
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}





?>