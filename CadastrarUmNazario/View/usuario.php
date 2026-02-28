<?php
session_start();
            
            $_SESSION['usuarioEmail'] ;           
            $_SESSION['usuarioSenha'];

if(!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])){
    
		header("Location: logar.html");
                
		exit;
		}else{
		
?>
<html>
    <head>
        <title>Perfil Usuário </title>
        <meta charset="UTF-8">
        <link rel ="icon" type="image/jpg" href="img/icon2.jfif"/>
    </head>
    <body>
        <div>
<?php echo "<span>"; echo "Olá, "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioNome']; echo "</span>";?>
        <br><br>
        <fieldset>
        <legend>Sistema</legend>
        <a href="#"></a><br><br>
        </fieldset>
        <br>
        <form action="sair.php">
        <input type="submit" value="Deslogar" name="deslogar">
        </form>
        </div>
    </body>
    <hr>
    <center><h5>Gabriel Oliveira - Todos os direitos resevados</h5></center>
</html>
<?php }?>