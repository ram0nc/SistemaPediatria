<?php include("cabecalho.php"); 		
 include("conecta.php");			
 include("DAO-Plano.php"); 

 $id = $_POST['id'];
 RemovePlano($conexao, $id);
 ?>
  <p class="alert-success">Medicamento apagado com sucesso.</p>
 
 <?php 
 include("rodape.php") ?>