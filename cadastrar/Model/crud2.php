<?php

require "conexao.php";
 session_start(); 
 
class crud2 {
    function inserir_filme($nome_filme,$diretor,$critica){ 

    $conn= conectar();   
 
    $sql = "INSERT INTO filme (nome_filme,diretor,critica) values('$nome_filme','$diretor','$critica')";
 
     mysqli_query($conn,$sql);   

     echo"<script language='javascript' type='text/javascript'>alert('Critica Cadastrada com sucesso');window.location.href='../View/filme.php';</script>";
 
   }

   

   public function excluir_filme ($codigo_filme){

    $conn= conectar();   
    
    $cod_filme= mysqli_query($conn, "SELECT * FROM filme WHERE codigo_filme = '$codigo_filme'");	
    
    if(mysqli_num_rows($cod_filme) == 0){
              
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível excluir');window.location.href='../View/excluir.php';</script>";
    }
           else{	
    
                  $result_filme = "DELETE FROM filme WHERE codigo_filme = '$codigo_filme'";
                  
                  mysqli_query($conn, $result_filme);
      
      if(mysqli_affected_rows($conn) != 0){
          
        echo"<script language='javascript' type='text/javascript'>alert('Excluído com sucesso');window.location.href='../View/excluir.php';</script>";
                     
              }else{
                  
                  header("Location:../view/excluir.php");
                   
                  
              }
    }
  
    
   }


   public function alterar_Filme($codigo_filme, $nome_filme,$diretor,$critica){

    $conn= conectar(); 
    
  	$pegacodigo_filme = mysqli_query($conn, "SELECT * FROM filme WHERE codigo_filme = '$codigo_filme'");

         if(mysqli_num_rows($pegacodigo_filme) == 0){

	    	echo "<script language='javascript' type='text/javascript'>alert('Este Código NÃO esta cadastrado em nossos registros');window.location.href='../View/alterar.php'</script>";

	      }else{		

		
          $result_filme = "UPDATE filme SET nome_filme = '$nome_filme', diretor = '$diretor', critica = '$critica' WHERE codigo_filme = '$codigo_filme'";

         mysqli_query($conn,$result_filme);

             if(mysqli_affected_rows($conn) != 0){
            echo "

                 <script language='javascript' type='text/javascript'>alert('Critica alterada com sucesso!');window.location.href='../View/filme.php'</script>";
                 
            
             }else{
                  echo " 
                   <script language='javascript' type='text/javascript'>alert('Nao foi possivel alterar esta critica');window.location.href='../View/alterar.php'</script>";                          
              }
        }
   }
}