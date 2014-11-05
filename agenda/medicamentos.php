<?php include("cabecalho.php"); ?>

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
                      <li class="active"><a href="#novo-medicamento" role="tab" data-toggle="tab">Cadastrar Medicamento</a></li>
                      <li><a href="#lista-medicamento" role="tab" data-toggle="tab">Listar Medicamentos</a></li>
                    </ul>
                    
                    <div class="tab-content">
                        <div class="tab-pane col-lg-6 active" id="novo-medicamento">
                            <br>
                            <form class="col-lg-9"  action="add-medicamento.php" method="post">
                                <div class="form-group">
                                    <label for="pacient-name">Nome do Medicamento</label>
                                    <input class="form-control" type="text" id="medicamento">
                                </div>
                                 <div class="form-group">
                                
                                   <button type="submit" class="btn btn-lg btn-primary" >Salvar Medicamento</button>
                                </div>
                               


                            </form>

                        </div>
                        <div class="tab-pane col-lg-6" id="lista-medicamento">
                            EM CONSTRUÇÃO
                        </div>
                    </div>
                    
                </div>
                <!-- /.row -->


<?php include("rodape.php") ?>