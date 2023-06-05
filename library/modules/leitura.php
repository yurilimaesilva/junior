<?php
include('conection.php');

class leitura extends conn {
    private $pdo;
    public function __construct()
    {
        $this->pdo = $this->start();
    }

    public function ler($tabela, $colunas, $condi=null)
    {
        
        $ler = $this->pdo->query('SELECT '.$colunas.' FROM '.$tabela.' '.$condi);
        
        return $ler->fetch(PDO::FETCH_ASSOC);
        
    }
}