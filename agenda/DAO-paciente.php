<?php 

 function inserePaciente($conecta,$nome_crianca,$nomeMae,$nomePai,$dataNascimento,$sexo,$endereco,$planosaude)
{
	$sql = "insert into paciente (nome_crianca,nomeMae,nomePai,dataNascimento,sexo,Endereco_idEndereco,PlanoSaude_idPlanoSaude) values ('{$nome_crianca}','{$nomeMae}','{$nomePai}','{$dataNascimento}','{$sexo}','{$endereco}','{$planosaude}')";
		return mysqli_query($conecta, $sql);

}

function ListaPacientes($conecta){

	$pacientes = array();
	$resultado = mysqli_query($conecta, "select *from endereco");
	while($paciente= mysqli_fetch_assoc($resultado)) {
		array_push($pacientes, $paciente);
	}
	return $pacientes;
}

function RemovePaciente($conecta,$id)
{
	$query = "delete from paciente where idPaciente = {$id}";
	return mysqli_query($conecta, $query);
}


function buscarPaciente($conecta,$id){
	
	$query = "select *from paciente where idPaciente = {$id}";
	return mysqli_query($conecta,$query);
}


