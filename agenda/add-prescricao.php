<?php 
include ("cabecalho.php");
include ("DAO-medicamento.php");
include ("DAO-prescricao.php");

include ("conecta.php");

$medicamento = $_GET['medicamento'];
$idMedicamento = buscarMedicamento($conexao,$medicamento);
//mudei pra testar o tamanho do array
//o erro tava na função mysqli_numrows pq tu tava passando um array e não uma consu


if(sizeof($idMedicamento)==0){ 
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
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger centralizado">a prescricao não foi adicionado: <?= $msg?></p>
<?php
}
 
include("rodape.php"); ?>			
