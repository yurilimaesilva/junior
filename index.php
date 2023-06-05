<?php
include('config/dbconfig.php');
//include('library/modules/leitura.php');
//include('library/modules/criar.php');
include('library/modules/alterar.php');



//$leitura = new leitura();
//$leitura->ler('usuario','nome,senha,status');

//$criar = new criar();
//$criar->criacao('abc','Benjamin','abacate','1');

$alterar = new alterar();
$alterar->alteracao('usuario','oi','oi2','1','1');

?>