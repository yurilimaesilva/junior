<?php

include('conection.php');

class alterar extends conn {

    private $pdo;
    public function __construct()
    {
        $this->pdo = $this->start();
    }

    public function alteracao($tabela, $nome, $senha, $status, $id)
    {
        
        $alterar = $this->pdo->prepare('UPDATE '.$tabela.' set nome = :nome , senha = :senha , status = :status WHERE id = :id');
        
        $alterar->execute(array(
            ':nome'=>$nome,
            ':senha'=>$senha,
            ':status'=>$status,
            ':id'=>$id

        ));

        if ($alterar->rowCount()){
            echo 'Editado com sucesso';
        }
        else{
            echo 'Erro';
        }


    }

}