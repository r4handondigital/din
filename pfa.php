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
                  <li class="breadcrumb-item"><a >PFA</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Listagem de PFA's</li>
                
                </ol>
              </nav>
              <!-- MIOLO DE PÃO -->

               <section class="sessao-conteudo">
                 <h1 class="titulo">
                    Plano de Fiscalização Anual
                    <a href="nova-pfa.php" class="btn btn-primary botao-titulo">Nova PFA</a>
                  </h1>

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
                     <!--.bloco-tabela-dados-->
                    <div class="bloco-tabela-dados">
                        <form id="frm-example" action="" method="POST">
                          

   <ul class="legenda-tabela">
                            <li>Legenda:</li>
                            <li><i class="fa fa-pencil-square-o"></i> editar</li>
                           
                            <li><i class="fa fa-trash"></i> excluir</li>
                            <li><i class="fa fa-link"></i> Ações Incluídas</li>
                            <li><i class="fa fa-code-fork"></i> versões</li>
                            <li><i class="fa fa-download"></i> Download</li>
                        </ul>

                            <table id="example" class="display select" cellspacing="0" width="100%">
                               <thead>
                                  <tr>
                                     <th><input name="select_all" class="selec_geral" value="1" type="checkbox"></th>
                                     <th>Título</th>
                                     <th>Data de Início</th>
                                     <th>Data de Término</th>
                                     <th>Processo</th>
                                     <th>Última Versão Aprovada</th>
                                     <th>Ações</th>
                                  </tr>
                               </thead>
                               <tbody>
                                 <tr>
                                     <td></td>
                                     <td>PFA 2017</td>
                                     <td>01/01/2017</td>
                                     <td>31/12/2017</td>
                                     <td>005083/2017</td>
                                     <td>1.0</td>
                                     <td>
                                        <ul class="legenda-acoes">
                                            <li><a href="editar-pfa.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Ações incluídas"><i class="fa fa-link"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Versões"><i class="fa fa-code-fork"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Download"><i class="fa fa-download"></i></a></li>                                        
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                   <tr>
                                     <td></td>
                                     <td>PFA 2018</td>
                                     <td>01/01/2018</td>
                                     <td>31/12/2018</td>
                                     <td>005083/2018</td>
                                     <td>1.0</td>
                                     <td>
                                        <ul class="legenda-acoes">
                                            <li><a href="editar-pfa.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Ações incluídas"><i class="fa fa-link"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Versões"><i class="fa fa-code-fork"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Download"><i class="fa fa-download"></i></a></li>                                        
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                   <tr>
                                     <td></td>
                                     <td>PFA 2019</td>
                                     <td>01/01/2019</td>
                                     <td>31/12/2019</td>
                                     <td>005083/2019</td>
                                     <td>1.0</td>
                                     <td>
                                        <ul class="legenda-acoes">
                                            <li><a href="editar-pfa.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Ações incluídas"><i class="fa fa-link"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Versões"><i class="fa fa-code-fork"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Download"><i class="fa fa-download"></i></a></li>                                        
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                   <tr>
                                     <td></td>
                                     <td>PFA 2016</td>
                                     <td>01/01/2016</td>
                                     <td>31/12/2016</td>
                                     <td>005083/2016</td>
                                     <td>1.0</td>
                                     <td>
                                        <ul class="legenda-acoes">
                                            <li><a href="editar-pfa.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Ações incluídas"><i class="fa fa-link"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Versões"><i class="fa fa-code-fork"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Download"><i class="fa fa-download"></i></a></li>                                        
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                   <tr>
                                     <td></td>
                                     <td>PFA 2015</td>
                                     <td>01/01/2015</td>
                                     <td>31/12/2015</td>
                                     <td>005083/2015</td>
                                     <td>1.0</td>
                                     <td>
                                        <ul class="legenda-acoes">
                                            <li><a href="editar-pfa.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Ações incluídas"><i class="fa fa-link"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Versões"><i class="fa fa-code-fork"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Download"><i class="fa fa-download"></i></a></li>                                        
                                        </ul>
                                    </td>
                                   
                                  </tr>

                                   <tr>
                                     <td></td>
                                     <td>PFA 2014</td>
                                     <td>01/01/2014</td>
                                     <td>31/12/2014</td>
                                     <td>005083/2014</td>
                                     <td>1.0</td>
                                     <td>
                                        <ul class="legenda-acoes">
                                            <li><a href="editar-pfa.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Ações incluídas"><i class="fa fa-link"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Versões"><i class="fa fa-code-fork"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Download"><i class="fa fa-download"></i></a></li>                                        
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                   <tr>
                                     <td></td>
                                     <td>PFA 2013</td>
                                     <td>01/01/2013</td>
                                     <td>31/12/2013</td>
                                     <td>005083/2013</td>
                                     <td>1.0</td>
                                     <td>
                                        <ul class="legenda-acoes">
                                            <li><a href="editar-pfa.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Ações incluídas"><i class="fa fa-link"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Versões"><i class="fa fa-code-fork"></i></a></li>

                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Download"><i class="fa fa-download"></i></a></li>                                        
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                 
                               </tbody>
                               
                            </table>
                              
                              

                              <div class="botoes-tabela">
                                  <button id="EditarForm" type="button" class="btn btn-primary btn-lg" disabled>Editar</button>
                                  <button id="ExcluirForm" type="button" onclick="alertaModal('handleDismiss')" class="btn btn-danger btn-lg" disabled>Excluir</button>
                              </div>

                                 </form>
                        </div><!--.bloco-tabela-dados-->

                      </div><!--#content-tabela .contentScroll-->    
                  </div><!-- col-sm-12 -->
                </div><!--.row-->
            
               </section> 

                
            </div><!--.col-md-10 GERAL DO MIOLO-->

        </div><!-- /row  GERAL DO MIOLO-->



    </div><!-- /container-fluid // Engloba todo o conteudo do projeto menos o topo-->
          
<?php include ('_footer.php'); ?>