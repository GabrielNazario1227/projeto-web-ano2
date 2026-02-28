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
 <link rel ="icon" type="image/jpg" href="img/th.jfif"/>
 <link rel="stylesheet" type="text/css"  href="CSS/estilo.css"> 
</head>
<body>
    <center>
        <br>
<div class="header"> 
<?php echo "<span>"; echo "Olá, "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioNome']; echo "</span>";?>
<br><br>
<a href="cadastro_filme.php"><button>Faça criticas a um filme</button></a> 

<a href="alterar.php"><button>Altere suas criticas</button></a>

<a href="../Controller/controla_consulta_filme.php"><button>Consulte suas criticas por ordem de ID</button></a>

<a href="../Controller/controla_consulta3_filme.php"><button>Contador de criticas</button></a>

<a href="excluir.php"><button>Exclua suas criticas</button></a>

<form action="sair.php">
        <input type="submit" value="Deslogar" name="deslogar">
        </form>

</div>
   </center>
	</body>
	<hr>
	<h5> Gabriel Oliveira - Todos os direitos resevados</h5>
</html>
<?php }?>