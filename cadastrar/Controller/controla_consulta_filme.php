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
  <th>ID do filme</th>    
  </tr>  
  
    <?php 
      include_once("../Model/conexao.php");
      
      $conn= conectar();  
      

    $conectados = "SELECT * FROM filme GROUP BY codigo_filme";
      
  	$resultado_conectados = mysqli_query($conn, $conectados);
          
  	while($row_conectados = mysqli_fetch_assoc($resultado_conectados)){ 
  	
   ?>

  <tr>
  <td><?php echo $row_conectados['codigo_filme'];?></td>
	
	
  </tr>
  
  <?php }?>

</table>
<table>
  <tr>
    <th>Nome</th><th></th><th></th><th></th>
    <th>Diretor</th><th></th><th></th><th></th>
    <th>Criticas</th>
  </tr>  
  
  <?php 
    include_once("../Model/conexao.php");
    
    $conn= conectar();  
    

  $filme = "SELECT * FROM filme ORDER BY codigo_filme";
    
	$resultado_filme = mysqli_query($conn, $filme);
        
	while($row_filme = mysqli_fetch_assoc($resultado_filme)){ 
	
 ?>

  <tr>
  <td><?php echo $row_filme['nome_filme'];?></td><th></th><th></th><th></th>
	<td><?php echo $row_filme['diretor'];?></td><th></th><th></th><th></th>
        <td><?php echo $row_filme['critica'];?></td>
	
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
