<?php include("cabecalho.php"); 		
 include("conecta.php");			
 include("DAO-exame.php"); 

 $id = $_POST['id'];
 RemoveExame($conexao, $id);
 ?>
  <p class="alert-success">Medicamento apagado com sucesso.</p>
 
 <?php 
 include("rodape.php") ?>