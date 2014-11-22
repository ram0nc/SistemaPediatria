<?php 

error_reporting(E_ALL ^ E_NOTICE);
include("mostra-alerta.php");
include ("logica-usuario.php");

 verificaUsuario();
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Consultório Pediátrico</title>

    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="principal.php">Consultório - <?= usuarioLogado() ?></a>
            </div>

            <?php include("mensagens.php") ?>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Drº <?= usuarioLogado() ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Mensagens</a>
                        </li>
                        <li>
                           <a href="configuracoes.php"><i class="fa fa-fw fa-gear"></i> Configurações</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="principal.php"><i class="fa fa-fw fa-dashboard"></i> Principal</a>
                    </li>
                    <li>
                        <a href="paciente-conteudo.php"><i class="fa fa-fw fa-group"></i> Pacientes</a>
                    </li>
                    <li>
                        <a href="consultas.php"><i class="fa fa-fw fa-calendar"></i> Consultas</a>
                    </li>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Recursos <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="exame.php"><i class="fa fa-fw fa-medkit"></i> Exames</a>
                            </li>
                             <li>
                                 <a href="medicamentos.php"><i class="glyphicon glyphicon-tint"></i> Medicamentos</a>
                            </li>
                             <li>
                                <a href="planodesaude.php"><i class="fa fa-fw fa-medkit"></i> Plano de saúde</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="prescricao.php"><i class="fa fa-fw fa-flask"></i> Prescrição</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
		

		    <div id="page-wrapper">

            <div class="container-fluid">

                <?php 
               mostraAlerta("success");
               mostraAlerta("danger");
            ?>