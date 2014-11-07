<?php include("cabecalho.php"); 		
			
 include ("conecta.php");
 include ("DAO-PlanoSaude.php");


$nome = $_GET['plano'];

if( inserePlano($conexao, $nome)){ ?>
	<p class="text-success">O produto <?= $nome ?> foi adicionado.</p>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger centralizado">O produto <?= $nome ?> não foi adicionado: <?= $msg?></p>
<?php
}
 
include("rodape.php"); ?>			
