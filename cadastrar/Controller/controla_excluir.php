<?php  
      
if ( isset($_POST['acao']) ){
    
 include_once '../Model/crud2.php' ;   

$codigo_filme= $_POST['codigo_filme'];

$excluir = new crud2();

$excluir->excluir_filme($codigo_filme);
}        