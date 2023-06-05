<?php

include('conection.php');

class criar extends conn {

    private $pdo;
    public function __construct()
    {
        $this->pdo = $this->start();
    }

    public function criacao($tabela, $nome, $senha, $status)
    {
        
        $criar = $this->pdo->prepare('INSERT INTO '.$tabela.' (nome, senha, status) values (:nome, :senha, :status)');
        
        $criar->execute(array(
            ':nome'=>$nome,
            ':senha'=>$senha,
            ':status'=>$status 
        ));

        if ($criar->rowCount()){
            echo 'Salvo com sucesso';
        }
        else{
            echo 'Erro';
        }


    }

}