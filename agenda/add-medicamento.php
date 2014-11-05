<?php include("cabecalho.php"); 		
include ("BancoDeDados.php"); 			
 
$db = BancoDeDados::getInstance();
var_dump($db);


$nome = $_POST['medicamento'];
$sql = "insert into medicamento (idMedicamento,nome_medicamento) values ('{1}','{$nome}')";
if($db->executar($sql)){ ?>
	<p class="text-success">O produto <?= $nome ?> foi adicionado.</p>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $nome ?> não foi adicionado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>			
