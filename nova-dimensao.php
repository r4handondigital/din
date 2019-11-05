<?php include ('_header.php'); ?>

<div class="container-fluid">
  
  <div class="row" id="bloco-site">
      
    <div class="col mov-menu" id="bg-menu">

       <?php include ('_menu.php'); ?>

      </div><!-- /col  // Menu lateral (DESKTOP) -->

      <div class="col-md-10" id="geral-conteudo">
        <!-- MIOLO DE PÃO -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="inicial.php"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="dimensao.php">Dimensão</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nova Dimensão</li>
          
          </ol>
        </nav>
        <!-- MIOLO DE PÃO -->

         <section class="sessao-conteudo">
           <h1 class="titulo">
              Nova Dimensão
            </h1>
         </section> 

        

            <div class="row">
                <div class="col-sm-12">
                  <!-- ALERTA DE FORM  ENVIADO -->
                        <div id="alerta-confirmacao" class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>AÇÃO REALIZADA COM SUCESSO!</strong> 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                    <!-- FIM ALERTA DE FORM  ENVIADO -->

                  <form id="FormCadastro" action="#" method="get" >

                    <fieldset>
                      <legend>Dados de Dimensão</legend>
                        
                        
                            <div class="row">
                                <div class="col-sm-1 col-md-1">
                                    <input type="text" id="ordem" name="ordem" class="form-control form-control-lg" placeholder="Ordem" >
                                     
                                  </div>

                                  <div class="col-sm-3 col-md-3">
                                    <select name="situacao" id="situacao" class="form-control form-control-lg">
                                      <option selected disabled>Situação</option>
                                      <option value="ativo">Ativo</option>
                                      <option value="inativo">Inativo</option>
                                      <option value="pendente">Pendente</option>
                                    </select>
                                  </div>

                                  <div class="col-sm-12 col-md-8">
                                    <input type="text" id="nome" name="nome" class="form-control form-control-lg" placeholder="Descrição da Dimensão*" required>
                                  </div>

                                  
                                 
                            </div><!--.row-->

                          </fieldset>

                         

                         <div class="botoes-de-envio">
                                  
                                  <button  id="salvar_formz" class="btn btn-primary" >Salvar dimensão</button>

                                 
                              </div>

                        </form>


                    
                </div>
                
            </div>
        
      </div><!--.col-md-10 GERAL DO MIOLO-->


  </div><!-- /row  GERAL DO MIOLO-->

</div><!-- /container-fluid // Engloba todo o conteudo do projeto menos o topo-->
          

<?php include ('_footer.php'); ?>

         