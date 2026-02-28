<?php


    function conectar(){

    $conn = mysqli_connect('localhost', 'root', '', 'filmes1');
    
	if(!$conn){
            
		return "Conexão não abre !" ;
                
	}else{
            
		return $conn ;
    }
    

    
}

