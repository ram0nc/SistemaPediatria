<?php include("cabecalho.php"); 		
			
 include ("conecta.php");
 include ("DAO-medicamento.php");


$nome = $_GET['medicamento'];

if( insereMedicamento($conexao, $nome)){ ?>
	<p class="text-success">O produto <?= $nome ?> foi adicionado.</p>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger centralizado">O produto <?= $nome ?> não foi adicionado: <?= $msg?></p>
<?php
}
 
include("rodape.php"); ?>			
