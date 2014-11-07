<?php 
include ("cabecalho.php");
include ("DAO-medicamento.php");
include ("DAO-prescricao.php");

include ("conecta.php");

$medicamento = $_GET['medicamento'];
$idMedicamento = buscarMedicamento($conexao,$medicamento);
//nao sei pq ele tah dando esse warning, mas ele tah resolvendo
$numero = mysqli_num_rows($idMedicamento);
if( $numero < 1){ 
     insereMedicamento($conexao,$medicamento);
     $idMedicamento = buscarMedicamento($conexao,$medicamento);
 }

$dosagem = $_GET['dosagem'];
$administracao = $_GET['administracao'];
$tempoUso = $_GET['tempoUso'];
$idMedicamento = $idMedicamento['idMedicamento'];


if( inserePrescricao($conexao, $dosagem,$administracao,$tempoUso,$idMedicamento)){ ?>
	<p class="text-success">a prescricao  foi adicionado.</p>
<?php } else {
	//$msg = mysqli_error($conexao);
?>
	<p class="text-danger centralizado">a prescricao não foi adicionado: <?= $msg?></p>
<?php
}
 
include("rodape.php"); ?>			
