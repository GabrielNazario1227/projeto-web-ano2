<?php

    function conectar(){

    $conn = mysqli_connect('localhost', 'root', '', 'escola1');
    
	if(!$conn){
            
		return "Conexão não abre !" ;
                
	}else{
            
		return $conn ;
    }
    

    


}
