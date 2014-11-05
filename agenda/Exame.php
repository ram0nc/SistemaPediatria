<?php include("cabecalho.php") ?>

  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Medicamentos
                        </h1>
                      
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="active"><a href="#novo-Exame" role="tab" data-toggle="tab">Cadastrar Exame</a></li>
                      <li><a href="#lista-Exames" role="tab" data-toggle="tab">Listar Exames</a></li>
                    </ul>
                    
                    <div class="tab-content">
                        <div class="tab-pane col-lg-6 active" id="novo-Exame">
                           <br>
                            <form class = "col-lg-9">

                                <div class="form-group">
                                    <label for="pacient-name">Nome do Exame</label>
                                    <input class="form-control" type="text" id="nome-exame">
                                </div>
                            </form>

                            <div class="col-lg-3">
                              <br>
                                    <div class="form-group">
                                
                                   <button type="button" class="btn btn-lg btn-primary">Salvar Paciente</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane col-lg-6" id="lista-Exames">
                            EM CONSTRUÇÃO
                        </div>
                    </div>
                    
                </div>
                <!-- /.row -->



<?php include("rodape.php") ?>