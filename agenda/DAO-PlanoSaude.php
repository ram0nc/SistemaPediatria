<?php 

 function inserePlano($conecta,$plano)
{
	$sql = "insert into planosaude (nome_plano) values ('{$plano}')";
		return mysqli_query($conecta, $sql);

}

function ListaPlano($conecta){

	$planos = array();
	$resultado = mysqli_query($conecta, "select *from planosaude");
	while($plano = mysqli_fetch_assoc($resultado)) {
		array_push($planos, $plano);
	}
	return $planos;
}

function RemovePlano($conecta,$id)
{
	$query = "delete from planosaude where idPlanoSaude = {$id}";
	return mysqli_query($conecta, $query);
}

