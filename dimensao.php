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
                  <li class="breadcrumb-item"><a >Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dimensão</li>
                
                </ol>
              </nav>
              <!-- MIOLO DE PÃO -->

               <section class="sessao-conteudo">
                 <h1 class="titulo">
                    Dimensões Cadastradas
                    <a href="nova-dimensao.php" class="btn btn-primary botao-titulo">Nova Dimensão</a>
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
                        </ul>

                            <table id="example" class="display select" cellspacing="0" width="100%">
                               <thead>
                                  <tr>
                                     <th><input name="select_all" class="selec_geral" value="1" type="checkbox"></th>
                                     <th>Descrição</th>
                                     <th>Ativo</th>
                                     <th>Removido</th>
                                     <th>Ações</th>
                                    
                                  </tr>
                               </thead>
                               <tbody>
                                 <tr>
                                     <td></td>
                                     <td>Atuação Concomitante</td>
                                     <td>Ativo</td>
                                     <td>Incluso</td>
                                     <td>
                                        <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                   <tr>
                                     <td></td>
                                     <td>Contas de Gestão</td>
                                     <td>Inativo</td>
                                     <td>Removido</td>
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
    <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº 0100411-81.2013.8.20.0125-002, ENCAMINHA PROIBIÇÃO DE CONTRATAÇÃO COM O PODER PÚBLICO  </td>
                                     <td>Ativo</td>
                                     <td>Incluso</td>
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                  <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº 560-74.10.2019.1 ENCAMINHA COMUNICAÇÃO DE CONDENAÇÃO </td>
                                     <td>Pendente</td>
                                     <td>Removido</td>
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                   <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº 52/2019-SPF AÇÃO DE INVESTIGAÇÃO JUDICIAL ELEITORAL Nº 0601367-19.2018.6.20.0000(PJE)  </td>
                                     <td>Ativo</td>
                                     <td>Removido</td>
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
  <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº 0000145-41.2009.8.20.0153-009 ENCAMINHA CÓPIA DE SENTENÇA   </td>
                                     <td>Ativo</td>
                                     <td>Removido</td>
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                  
                                  <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº 0000145-41.2009.8.20.0153-009 ENCAMINHA CÓPIA DE SENTENÇA   </td>
                                     <td>Inativo</td>
                                     <td>Incluso</td>
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                  
                                  <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº 0103159-40.2013.8.20.0108-005 ENCAMINHA SENTENÇA DE PROIBIÇÃO DE CONTRATAR COM O PODER PUBLICO </td>
                                     <td>Ativo</td>
                                     <td>Incluso</td>
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                   <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº 0103159-40.2013.8.20.0108-005 ENCAMINHA SENTENÇA DE PROIBIÇÃO DE CONTRATAR COM O PODER PUBLICO </td>
                                     <td>Ativo</td>
                                     <td>Incluso</td>
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                   <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº OJT.0010.000006-0/2019 PROIBIÇÃO DE CONTRATAR COM O PODER PÚBLICO(ALDANISIA RAMALHO PEREIRA DE SÁ)  </td>
                                     <td>Inativo</td>
                                     <td>Incluso</td>
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                    <tr>
                                     <td></td>
                                     <td>AQUISIÇÃO DE FECHADURA ELETRÔNICA   </td>
                                     <td>Ativo</td>
                                     <td>Incluso</td>
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                  <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº 54/2014 ENCAMINHA CÓPIA DE COMPROVANTE DE ENTREGA DO SIAI 1º BIM/2010   </td>
                                     <td>Ativo</td>
                                     <td>Incluso</td>
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                  <tr>
                                     <td></td>
                                     <td>CONVÊNIO TCE-RN, UFRN E FUNPEC (INSTITUTO METRÓPOLE DIGITAL)   </td>
                                     <td>Pendente</td>
                                     <td>Incluso</td>
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                  <tr>
                                     <td></td>
                                     <td>CONCESSÃO DE SUPRIMENTO DE FUNDOS À DIN – SERVIÇO DE TERCEIRO - PESSOA JURÍDICA (3.3.90.39)    </td>
                                     <td>Pendente</td>
                                     <td>Incluso</td>
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                  <tr>
                                     <td></td>
                                     <td>CONCESSÃO DE SUPRIMENTO DE FUNDOS À DIN – MATERIAL DE CONSUMO - PESSOA JURÍDICA (3.3.90.30)  </td>
                                     <td>Pendente</td>
                                     <td>Incluso</td>
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                   <tr>
                                     <td></td>
                                     <td>DOCUMENTO PARA VALIDAÇÃO DA COMUNICAÇÃO ELETRÔNICA </td>
                                     <td>Pendente</td>
                                     <td>Incluso</td>
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                  
                                   <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº 177/2019 SOLICITA A SUBSTITUIÇÃO DO ITEM 11 DAS CONTAS DE GESTÃO .  </td>
                                     <td>Pendente</td>
                                     <td>Incluso</td>
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                               </tbody>
                               
                            </table>
                              
                              

                              <div class="botoes-tabela">
                                  <button id="EditarForm" type="button" class="btn btn-primary" disabled>Editar</button>
                                  <button id="ExcluirForm" type="button" onclick="alertaModal('handleDismiss')" class="btn btn-danger" disabled>Excluir</button>
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