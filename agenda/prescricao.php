<?php include ("cabecalho.php"); ?>

  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Prescrição
                        </h1>
                      
                    </div>
                </div>
                <!-- /.row -->
                <div class="row col-lg-12">
                   
                  
                         <br>
                            <form class = "col-lg-9">

                                <div class="form-group">
                                    <label for="nome-exame">Nome do exame</label>
                                    <select class="form-control" id = "lista-exame">
                                    <option>doflex</option>
                                    <option>neosaldina</option>
                                    <option>bezetacil</option>
                                 
                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="dosagem">Dosagem</label>
                                    <input class="form-control" type="text" id="dosagem">
                                </div>
                                <div class="form-group">
                                    <label for="dias">Administração</label>
                                    <input class="form-control" type="text" id="administraçao">
                                </div>
                            	 <div class="form-group">
                                    <label for="dias">Tempo de uso</label>
                                    <input class="form-control" type="text" id="tempoUso">
                                </div>
                               
                            


                            </form>

                           
                              <br>
                                    <div class="form-group">
                                
                                   <button type="button" class="btn btn-lg btn-primary">Salvar Prescrição</button>
                                </div>
                            
                       
                    
                </div>
                <!-- /.row -->





<?php include ("rodape.php"); ?>