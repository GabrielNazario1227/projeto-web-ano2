<?php  
 $botao=filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);    
 
if(isset($botao)){   
    
    
 include_once '../Model/crud1.php' ;   
 
$npet=filter_input(INPUT_POST, 'npet', FILTER_SANITIZE_STRING);

$pet = new crud1();
$pet->selecionar_Pet($npet);
        
}  