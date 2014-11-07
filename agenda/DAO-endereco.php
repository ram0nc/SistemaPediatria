<?php 

 function insereEndereco($conecta,$endereco,$numero,$complemento,$bairro,$municipio,$cep,$uf)
{
	$sql = "insert into endereco (endereco,numero,complemento,bairro,municipio,cep,uf) values ('{$endereco}','{$numero}','{$complemento}','{$bairro}','{$municipio}','{$cep}','{$uf}')";
		return mysqli_query($conecta, $sql);

}

function ListaEnderecos($conecta){

	$enderecos = array();
	$resultado = mysqli_query($conecta, "select *from endereco");
	while($endereco= mysqli_fetch_assoc($resultado)) {
		array_push($enderecos, $endereco);
	}
	return $enderecos;
}

function RemoveEndereco($conecta,$id)
{
	$query = "delete from endereco where idEndereco = {$id}";
	return mysqli_query($conecta, $query);
}


function buscarEndereco($conecta,$id){
	
	$query = "select *from endereco where idEndereco = {$id}";
	return mysqli_query($conecta,$query);
}


