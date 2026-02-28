<?php  
      
if ( isset($_POST['acao']) ){
    
 include_once '../Model/crud2.php' ;   

$codigo_filme= $_POST['codigo_filme'];
$nome_filme= $_POST["nome_filme"];
$diretor = $_POST["diretor"];
$critica= $_POST["critica"];

$alterar = new crud2();

$alterar->alterar_Filme($codigo_filme,$nome_filme,$diretor,$critica);
}    
