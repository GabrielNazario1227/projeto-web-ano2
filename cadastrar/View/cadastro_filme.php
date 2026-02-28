<?php
session_start();
            
            $_SESSION['usuarioEmail'] ;           
            $_SESSION['usuarioSenha'];

if(!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])){
    
		header("Location: logar.html");
                
		exit;
		}else{
		
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel ="icon" type="image/jpg" href="img/th.jfif"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="css/estilo.css">   
    <title>Cadastrar uma critica</title>
</head>
<body>
    <br>
    <center>
    <div class="header">  

    <?php echo "<span>"; echo "Olá, "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioNome']; echo "</span>";?>
   <form class="formulario" method="POST" action="../Controller/controla_cadastro_filme.php"> 
       
        
        <label>Nome do filme:</label>
        <input type="text" id="nome_filme" name="nome_filme" placeholder="Digite o nome do filme" required>      
        <br><br>
        <label>Diretor do filme:</label>
        <input type="text" id="diretor" name="diretor" placeholder="Digite o nome do diretor" required>              
        <br><br>
        <label>Critica:</label>
        <textarea id="critica" name="critica" rows="5" cols="33"> 
        </textarea> 
        <br><br>
        <input type="submit" name="acao" value="Cadastrar Critica">  
        <br><br>
        <a href="filme.php"><img src="img/voltar1.png"width="15%"/></a>
        </div>  
        </center>
</body>
</html>
<?php }?>