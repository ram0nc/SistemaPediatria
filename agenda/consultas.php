<?php include("cabecalho.php") ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Consultas
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Principal</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-calendar"></i> Consultas
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                   <div class="row">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="active"><a href="#Agendar-consulta" role="tab" data-toggle="tab">Agendar consulta</a></li>
                      <li><a href="#listar-consulta" role="tab" data-toggle="tab">Consultas Agendadas</a></li>
                    </ul>
                    
                      
                    <div class="tab-content">
                        <div class="tab-pane col-lg-12 active" id="Agendar-consulta">
                            
                                  <br>
                            <form >

                                <div class="form-group">
                                    <label for="pacient-name">Nome do paciente</label>
                                    <select class="form-control" id = "lista-paciente">
                                    <option>Ramon</option>
                                    <option>tiozinho</option>
                                    <option>oi</option>
                                    <option>teste</option>
                                </select>
                                </div>
                           

                             <div class="form-group">
                                    <label for="pacient-name">Data</label>
                                    <input class="form-control" type="date" id="data-consulta">
                                </div>
                              <div class="form-group">
                                    <label for="pacient-name">Hora</label>
                                    <input class="form-control" type="TIME" id="hora-consulta">
                                </div>

                               <div class="form-group">
                               
                                <label class="checkbox-inline">
                                    <input type="checkbox"> Encaixe
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox"> Novo Paciente
                                </label>
                                </div>
                                <div class="form-group">
                                
                                 </form>
                                   <button type="button" class="btn btn-lg btn-primary">Agendar</button>
                                </div>


                        </div>
                        <div class="tab-pane col-lg-6" id="listar-consulta">
                            EM CONSTRUÇÃO
                        </div>
                    </div>
                    
                </div>



<?php include("rodape.php") ?>