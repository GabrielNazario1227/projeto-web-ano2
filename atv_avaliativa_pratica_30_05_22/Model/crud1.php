<?php

require "conexao1.php";

 session_start(); 

class crud1 {   
     
 function inserir_Pet($npet,$raca,$servico){
     
    $conn= conectar();      
    
    $pegaNpet = mysqli_query($conn, "SELECT * FROM pet WHERE npet = '$npet'");	
	
    if(mysqli_num_rows($pegaNpet) == 1){	
	

    echo"<script language='javascript' type='text/javascript'>alert('Pet já existe');window.location.href='../View/usuario.php';</script>";
	

   }else{

  $sql = "INSERT INTO pet (npet,raca,servico) values('$npet','$raca','$servico')";

    mysqli_query($conn,$sql);   
    
    echo"<script language='javascript' type='text/javascript'>alert('Pet Cadastrado com sucesso');window.location.href='../View/pet.html';</script>";
   
   }
 }

 function selecionar_Pet($npet){
       
   
        $conn= conectar();         
 
        $result_pet = "SELECT * FROM pet  WHERE npet= '$npet' LIMIT 1";
        
        $resultado_pet = mysqli_query($conn, $result_pet);
        
        $resultado = mysqli_fetch_assoc($resultado_pet);
        
       
        if(isset($resultado)){
		
            $_SESSION['usuarioNpet'] = $resultado['npet'];
            $_SESSION['usuarioServico'] = $resultado['servico'];
            
            header("Location: ../View/pet.php");           
   
        
        }else{            
       
          echo"<script language='javascript' type='text/javascript'>alert('Nome do pet incorretos');window.location.href='../View/logar.html';</script>";
         
        }
    

  }
  
}