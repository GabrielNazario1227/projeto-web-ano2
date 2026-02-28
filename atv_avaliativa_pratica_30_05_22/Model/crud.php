<?php

require "conexao.php";

 session_start(); 

class crud {   
     
 function inserir_Usuario($nome,$email,$endereco,$telefone,$senha){
     
    $conn= conectar();      
    
    
    $pegaEmail = mysqli_query($conn, "SELECT * FROM usuario WHERE email = '$email'");	
	
    if(mysqli_num_rows($pegaEmail) == 1){	
	

    echo"<script language='javascript' type='text/javascript'>alert('Email já existe');window.location.href='../View/cadastrar.html';</script>";
	

   }else{

  $sql = "INSERT INTO usuario (nome,email,endereco,telefone,senha) values('$nome','$email','$endereco','$telefone','$senha')";

    mysqli_query($conn,$sql);   
    
    echo"<script language='javascript' type='text/javascript'>alert('Usuário Cadastrado com sucesso');window.location.href='../View/logar.html';</script>";
   
   }
 }
   function selecionar_Usuario($email,$senha){
       
   
        $conn= conectar();         
 
        $result_usuario = "SELECT * FROM usuario  WHERE email= '$email' && senha = '$senha' LIMIT 1";
        
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
       
        if(isset($resultado)){
		
            $_SESSION['usuarioNome'] = $resultado['nome'];
            $_SESSION['usuarioEmail'] = $resultado['email'];            		
            $_SESSION['usuarioSenha'] = $resultado['senha'];

            header("Location: ../View/usuario.php");           
   
        
        }else{            
       
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou Senha incorretos');window.location.href='../View/logar.html';</script>";
         
        }
    

  }
  
 


   }