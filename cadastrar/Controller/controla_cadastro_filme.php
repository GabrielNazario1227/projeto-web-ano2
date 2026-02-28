<?php

if ( isset($_POST['acao']) ){
    
 include_once '../Model/crud2.php' ;   
    
 $nome_filme= $_POST["nome_filme"];
 $diretor = $_POST["diretor"];
 $critica= $_POST["critica"];

$inserir = new crud2();

$inserir->inserir_Filme($nome_filme,$diretor,$critica); 
 
 
}

