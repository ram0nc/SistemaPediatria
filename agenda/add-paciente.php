<?php 
include ("cabecalho.php");
include ("DAO-endereco.php");
include ("DAO-telefone.php");
include ("DAO-paciente.php");
include ("DAO-PlanoSaude.php")
include ("conecta.php");


$endereco = $_GET['logradouro'];
$numero = $_GET['numero'];
$complemento = $_GET['complemento'];
$bairro = $_GET['bairro'];
$municipio = $_GET['municipio'];
$cep = $_GET['cep'];
$uf = $_GET['uf'];

 insereEndereco($conexao,$endereco,$numero,$complemento,$bairro,$municipio,$cep,$uf);
     $idEndereco = buscarEndereco($conexao,$endereco);

$nome_crianca = $_GET['paciente'];
$nomeMae = $_GET['nomemae'];
$nomePai = $_GET['nomepai'];
$dataNascimento = $_GET['datanascimento'];
$sexo = $_GET[''];
$endereco = $idEndereco;
$planosaude = $_GET['planosaude'];


$idPlano = buscarPlano($conexao,$planosaude);
//nao sei pq ele tah dando esse warning, mas ele tah resolvendo
$numero = mysqli_num_rows($idPlano);
if( $numero < 1){ 
     inserePlano($conexao,$planosaude);
     $idPlano = buscarPlano($conexao,$planosaude);
 }

 inserePaciente($conexao,$nome_crianca,$nomeMae,$nomePai,$dataNascimento,$sexo,$endereco,$planosaude);
     $idPaciente = buscarPaciente($conexao,$nome_crianca);


$telefone = $_GET['numerofixo'];
$ddd = $_GET['dddfixo'];
$tipotelefone = "fixo";
$complementotele = $_GET['complementofixo'];
$paciente = $idPaciente;
$endereco = $idEndereco;

 insereTelefone($conexao,$telefone,$ddd,$tipotelefone,$complementotele,$paciente,$endereco);
  
$telefone1 = $_GET['numerocelular'];
$ddd1 = $_GET['dddcelular'];
$tipotelefone1 = "celular";
$complementotele1 = $_GET['complementocelular'];
$paciente1 = $idPaciente;
$endereco1 = $idEndereco;

//nao sei pq ele tah dando esse warning, mas ele tah resolvendo
 insereTelefone($conexao,$telefone,$ddd,$tipotelefone,$complementotele1,$paciente,$endereco);
   
 
include("rodape.php"); ?>			

