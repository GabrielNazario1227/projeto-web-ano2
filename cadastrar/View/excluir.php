<?php
session_start();
            
            $_SESSION['usuarioEmail'] ;           
            $_SESSION['usuarioSenha'];

if(!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])){
    
		header("Location: frm_logar.php");
                
		exit;
		}else{
		
?>
<html>
<head>
<title>Excluir</title>
 <meta charset="UTF-8">
 <link rel ="icon" type="image/jpg" href="img/th.jfif"/>
 <link rel="stylesheet" type="text/css"  href="css/estilo.css">   
 </head>
<body>
    <br>
    <center>
<div>
<?php echo "<span>"; echo "Olá, "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioNome']; echo "</span>";?>
<form class="formulario"  action="../Controller/controla_excluir.php" method="POST">

<label>Digite o Código da critica:</label><input type="text" name="codigo_filme"><br><br>
<input type="submit" value="Excluir critica" name="acao">
</form>
        <a href="filme.php"><img src="img/voltar1.png"width="15%"/></a>
</div>
        </center>
</body>
</html>

<?php }	