<?php

class conn {
    private $host = HOST;
    private $user = USER;
    private $password = PASSWORD;
    private $dbname = DBNAME;
    private $conect = null;

    public function start(){
        try {
            if (empty($this->conect)) {
                $this->conect = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.'',$this->user,$this->password);
            }
        }
        catch(Exception $erro){
            echo 'ERRO: '.$erro->getMessage();

            die;
        }

        return $this->conect;
    }

}