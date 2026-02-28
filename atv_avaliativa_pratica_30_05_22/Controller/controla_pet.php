<?php
$botao=filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);

if(isset($botao)){   
    
    include_once '../Model/crud1.php';
    
 
    // filter_input — Obtem a específica variável externa pelo nome e opcionalmente a filtra.
    //Remova todos os caracteres, exceto letras, dígitos e !#$%&'*+-=?^_`{|}~@.[].
    
    $npet=filter_input(INPUT_POST, 'npet', FILTER_SANITIZE_STRING);
    $raca= filter_input(INPUT_POST, 'raca', FILTER_SANITIZE_STRING);
    $servico=filter_input(INPUT_POST, 'servico', FILTER_SANITIZE_STRING);
    
    if((!$npet) || (!$raca) || (!$servico)){
        
         echo"<script language='javascript' type='text/javascript'>alert('Preencham todos os campos');window.location.href='../View/usuario.php';</script>";
         
    }else{
    $pet = new crud1();      
    $pet->inserir_Pet($npet,$raca,$servico);
}
}