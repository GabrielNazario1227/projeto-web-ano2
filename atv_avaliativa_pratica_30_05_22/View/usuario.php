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
        <title>Area do cliente</title>
        <meta charset="UTF-8">
        <link rel ="icon" type="image/jpg" href="img/icon.jfif"/>
        <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
    </head>
    <body>
        <div>
<label><?php echo "<span>"; echo "Olá, "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioNome']; echo "</span>";?></label>
        <br><br>
        <fieldset>
         <center><h1>Cadastro do PET</h1></center> <!-- h1 para titulos do documento html e center está com aalinhamento centralizado -->
	<hr><!--tag linha -->
	<form name="cadastro" action="../Controller/controla_pet.php" method="post"> <!--o controle label=etiqueta ajuda a acessibilidade: leitor de tela leem este item-->
	<center><table>
	          
        <tr><td> <label>Nome do pet</label></td></tr>
	<tr> <td><label><input type="text " required ="required" name="npet" id="text1" size="50" placeholder="Digite o nome do animal aqui" autofocus/></label></td></tr>        
                
        <tr><td><label>Raça</label></td></tr>
	<tr><td><label><input type="text" required ="required" name="raca" id="text2" size="50" placeholder="Digite a raça do animal aqui"/></label></td></tr>
       
        <tr><td><label>Serviço desejado</label></td></tr>
        <tr><td><label><input type="text" required ="required" name="servico" size="50" placeholder="Digite o serviço requesitado aqui"></label></td></tr>       
        
	<tr><td><input type="reset" value="Limpar"><input type="submit" value="Cadastrar" name="botao"></td></tr>
        
	</table></center>
	</form>
        
        <form action="logar_pet.html"><center>
        <input type="submit" value="Logar"><br>
        </center></form>
        
        </fieldset>
        <br>
        <form action="sair.php">
        <center><input type="submit" value="Deslogar" name="deslogar"></center>
        </form>
        </div>
    </body>
    <hr>
    <center><h5>Gabriel Oliveira - Todos os direitos resevados</h5></center>
</html>
<?php }?>