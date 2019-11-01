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
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                
                </ol>
              </nav>
              <!-- MIOLO DE PÃO -->

                <div class="row">
                    <div class="col-sm-12">
                      <div class="alert-user alert alert-warning alert-dismissible fade show" role="alert">
                        <h1>Você tem 107 alertas precisando de sua atenção!</h1> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>


                        <div class="hello-user alert alert-success fade show" role="alert">
                          <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>-->
                          <h4 class="alert-heading">Bem-vindo ao Sistema do Plano de Fiscalização Anual</h4>
                          
                        </div><!-- / MENSAGEM -->

                    </div>
                </div><!-- / row DAS MENSAGENS-->

                
                
            </div><!--.col-md-10 GERAL DO MIOLO-->

        </div><!-- /row  GERAL DO MIOLO-->



    </div><!-- /container-fluid // Engloba todo o conteudo do projeto menos o topo-->
          
<?php include ('_footer.php'); ?>