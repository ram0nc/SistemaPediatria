<?php include("cabecalho.php"); 		
 include("conecta.php");			
 include("DAO-medicamento.php"); 

 $id = $_POST['id'];
 RemoveMedicamento($conexao, $id);
 ?>
  <p class="alert-success">Medicamento apagado com sucesso.</p>
 
 <?php 
 include("rodape.php") ?>