<?php include("cabecalho.php"); ?>


                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Pacientes
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Principal</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-medkit"></i> Pacientes
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="active"><a href="#novo-paciente" role="tab" data-toggle="tab">Cadastrar Paciente</a></li>
                      <li><a href="#lista-paciente" role="tab" data-toggle="tab">Listar Pacientes</a></li>
                    </ul>
                    
                      
                    <div class="tab-content">
                        <div class="tab-pane col-lg-12 active" id="novo-paciente">
                            
                            <div class="col-lg-6">
                            <div class="page-header">
                                <h3>Dados Paciente</h3>
                            </div>
                            <form>
                                <div class="form-group">
                                    <label for="pacient-name">Nome do Paciente</label>
                                    <input class="form-control" name="paciente" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="">Nome dos Pais</label>
                                    <input type="text" class="form-control" name="nomemae" placeholder="Nome da Mãe"><br>
                                    <input type="text" class="form-control" name="nomepai" placeholder="Nome do Pai">
                                </div>
                                <div class="form-group">
                                    <label for="">Data de Nascimento</label>
                                    <input type="date" name="datanascimento" class="form-control">
                                </div>
                                
                              
                            </form>

                             <div class="page-header">
                                <h3>Telefones</h3>
                            </div>
                            <form>
                                <div class="form-group">
                                    <label  for="pacient-name" id="celular">Telefone Celular</label>
                                    <input class="form-control" type="text" placeholder="DDD" id="ddd-celular"><br>

                                    <input  class="form-control" type="text" placeholder="número" id="numero-celular">
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Complemento</label>
                                    <input type="text" class="form-control" id="complemento-celular">
                                </div>
                                <br>

                                
                                <div class="form-group">
                                    <label  for="pacient-name" id="telefone-fixo">Telefone Residencial</label>
                                    <input class="form-control" type="text" placeholder="DDD" id="ddd-telefone"><br>

                                    <input  class="form-control" type="text" placeholder="número" id="numero-telefone">
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Complemento</label>
                                    <input type="text" class="form-control" id="complemento-residencial">
                                </div>
                                
                            </form>
                            </div>
                            <div class="col-lg-6">
                            <div class="page-header">
                                <h3>Endereco</h3>
                            </div>
                            <form>
                                  
                                <div class="form-group controls">
                                    <label for="">Logradouro</label>
                                    <input type="text" class="form-control" id ="logradoudo">
                              </div>
                              <div class="form-group">
                                    <label for="">Numero</label>
                                    <input type="number" class="form-control" id="numero">
                              </div>
                              <div class="form-group">
                                    <label for="">Complemento</label>
                                    <input type="text" class="form-control" id="complemento">
                              </div>
                              <div class="form-group">
                                    <label for="">Bairro</label>
                                    <input type="text" class="form-control" id="bairro">
                              </div>
                              
                              <div class="form-group">
                                    <label for="">Municipio</label>
                                    <input type="text" class="form-control" id="municipio">
                              </div>

                             <div class="form-group">
                                    <label for="">Cep </label>
                                    <input type="text" class="form-control" id="cep">
                            </div>
                                <div class="form-group">
                                    <label for="">UF</label>
                                    <input type="text" class="form-control" id="uf">
                                    </div>
                          
                                
                            </form>

                            <div class="page-header">
                                <h3>Plano de Saúde</h3>
                            </div>
                            <form>
                                  
                                <div class="form-group controls">
                                    <label for="">Selecione seu plano de saúde</label>
                                     <select class="form-control" id = "lista-planos">
                                            <option>Sus</option>
                                             <option>Unimed</option>
                                            <option>Multiclinicas</option>
                                            <option>Unihosp</option>
                                     </select>
                              </div>
                                <br>
                                <br>
                                <button type="button" class="btn btn-lg btn-primary">Salvar Paciente</button>

                        </div>
                        </div>
                        <div class="tab-pane col-lg-6" id="lista-paciente">
                            EM CONSTRUÇÃO
                        </div>
                    </div>
              

        </div>

<?php include("rodape.php") ?>