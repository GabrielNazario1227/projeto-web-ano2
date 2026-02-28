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
<title>Consultar Criticas</title>
 <meta charset="UTF-8">
 <link rel ="icon" type="image/jpg" href="../View/img/th.jfif"/>
 <link rel="stylesheet" type="text/css"  href="../View/CSS/estilo.css"> 
</head>
<body>
    <br>
    <center>
<div>

<?php echo "<span>"; echo "Olá, "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioNome']; echo "</span>";?><br><br>
<table>
  <tr>
  <th>Criticas feitas</th>    
 
  </tr>  
  
  <?php 
    include_once("../Model/conexao.php");
    
    $conn= conectar();  
    

     $conectados = "SELECT COUNT(codigo_filme) AS codigo_filme FROM filme";
    
	$resultado_conectados = mysqli_query($conn, $conectados);
        
	while($row_conectados = mysqli_fetch_assoc($resultado_conectados)){ 
	
 ?>

  <tr>
  <td><?php echo $row_conectados['codigo_filme'];?></td>
	
	
  </tr>
  
  <?php }?>

</table>
<br>
        <a href="../View/filme.php"><img src="../View/img/voltar1.png"width="15%"/></a>
</div>
        </center>
 
</body>
</html>
    <?php }