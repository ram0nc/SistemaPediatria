<?php include("cabecalho.php") ?>

  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Plano de Saúde
                        </h1>
                      
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="active"><a href="#novoPlano" role="tab" data-toggle="tab">Cadastrar Plano de Saúde</a></li>
                      <li><a href="#lista-Planos" role="tab" data-toggle="tab">Listar Planos cadastrados</a></li>
                    </ul>
                    
                    <div class="tab-content">
                        <div class="tab-pane col-lg-6 active" id="novoPlano">
                           <br>
                            <form class = "col-lg-9">

                                <div class="form-group">
                                    <label for="pacient-name">Nome do Plano de Saúde</label>
                                    <input class="form-control" type="text" id="nome-plano">
                                </div>
                            </form>

                            <div class="col-lg-3">
                              <br>
                                    <div class="form-group">
                                
                                   <button type="button" class="btn btn-lg btn-primary">Salvar Plano</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane col-lg-6" id="lista-Planos">
                            EM CONSTRUÇÃO
                        </div>
                    </div>
                    
                </div>
                <!-- /.row -->



<?php include("rodape.php") ?>