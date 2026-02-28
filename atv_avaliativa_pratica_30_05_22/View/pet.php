<?php
session_start();
            
            $_SESSION['usuarioNpet'] ;           
            $_SESSION['usuarioServico'];

if(!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioServico"])){
    
		header("Location: usuario.php");
                
		exit;
		}else{
		
?>
<html>
    <head>
        <title>PET </title>
        <meta charset="UTF-8">
        <link rel ="icon" type="image/jpg" href="img/icon.jfif"/>
        <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
    </head>
    <body>
        <div>
<label><?php echo "<span>"; echo "Nome do animal: "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioNpet']; echo "</span>";?></label>
<br><br>
<label><?php echo "<span>"; echo "Serviço: "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioServico']; echo "</span>";?></label>
        <br><br>
        <fieldset>
        </fieldset>
        <br>
        <form action="sair1.php">
        <center><input type="submit" value="Deslogar" name="deslogar"></center>
        </form>
        </div>
    </body>
    <hr>
    <center><h5>Gabriel Oliveira - Todos os direitos resevados</h5></center>
</html>
<?php }?>