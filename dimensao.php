<?php include ('_header.php'); ?>

   <div class="bg-cinza container-fluid"> 
  
  <div class="row flex-xl-nowrap" id="bloco-site">
      
    <div class="col-md-3 col-xl-2 mov-menu" id="bg-menu">

             <?php include ('_menu.php'); ?>

            </div><!-- /col  // Menu lateral (DESKTOP) -->

            <div class="col-md-10" id="geral-conteudo">
              <!-- MIOLO DE PÃO -->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="inicial.php"><i class="fa fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a >Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Listagem de Crud básico</li>
                
                </ol>
              </nav>
              <!-- MIOLO DE PÃO -->

               <section class="sessao-conteudo">
                 <h1 class="titulo">
                    Crud básico
                    <a href="proposta-de-acao-v2.php" class="btn btn-primary botao-titulo">Cadastrar</a>
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
                    
             



                  <fieldset style="margin-top: 25px">
                    <legend>Faça sua pesquisa:</legend>
                      <form id="FormCadastro" action="#" method="get" >
                      <div class="row">
                          <div class="col-sm-12 col-md-5" data-column="1">
                            <label for="descricao"> Descrição</label>                              
                           <input type="text" class="form-control column_filter" id="col1_filter">
                          </div>
                          <div class="col-sm-12 col-md-5" data-column="2">
                           <label for="situacao">Situação</label>                               

                                <select id="situacao" name="situacao" class="form-control column_filter">
                                  <option  value="" selected>Todas</option>
                                  <option>Ativo</option>
                                  <option>Offline</option>
                                  <option>Pendente</option>
                                
                                </select>
                                 
                          </div>
                         <!-- <div class="col-sm-12 col-md-2" data-column="3">
                           <label for="status">Status</label>
                                <select id="status" name="status" class="form-control column_filter">
                                  <option  value="" selected>Todas</option>
                                  <option>Incluso</option>
                                  <option>Removido</option>
                                 
                                
                                </select>
                                 
                          </div>-->

                          <div class="col-sm-12 col-md-2" style="margin-top: 30px;">
                            <button class="btn btn-primary ">Buscar</button>
                          </div>
                          
                      </div>
                    </form>
                  </fieldset>

                     <!--.bloco-tabela-dados-->
                    <div class="bloco-tabela-dados">
                        <form id="frm-example" action="" method="POST">
                          

                        <ul class="legenda-tabela">
                            <li>Legenda:</li>
                            <li><i class="far fa-edit"></i> editar</li>
                           
                            <li><i class="fa fa-trash"></i> excluir</li>
                        </ul>

                            <table id="example" class="display select" cellspacing="0" width="100%">
                               <thead>
                                  <tr>
                                     <th><input name="select_all" class="selec_geral" value="1" type="checkbox"></th>
                                     <th>Descrição</th>
                                     <th>Situação</th>
                                     <th>Status</th>
                                   <!--  <th>Ações</th> -->
                                    
                                  </tr>
                               </thead>
                               <tbody>
                                 <tr>
                                     <td></td>
                                     <td>Atuação Concomitante</td>
                                     <td>Ativo</td>
                                     <!--<td>Incluso</td>-->
                                     <td>
                                        <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                   <tr>
                                     <td></td>
                                     <td>Contas de Gestão</td>
                                     <td>Offline</td>
                                    <!-- <td>Removido</td>-->
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
    <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº 0100411-81.2013.8.20.0125-002, ENCAMINHA PROIBIÇÃO DE CONTRATAÇÃO COM O PODER PÚBLICO  </td>
                                     <td>Ativo</td>
                                     <!--<td>Incluso</td>-->
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                  <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº 560-74.10.2019.1 ENCAMINHA COMUNICAÇÃO DE CONDENAÇÃO </td>
                                     <td>Pendente</td>
                                    <!-- <td>Removido</td>-->
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                   <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº 52/2019-SPF AÇÃO DE INVESTIGAÇÃO JUDICIAL ELEITORAL Nº 0601367-19.2018.6.20.0000(PJE)  </td>
                                     <td>Ativo</td>
                                    <!-- <td>Removido</td>-->
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
  <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº 0000145-41.2009.8.20.0153-009 ENCAMINHA CÓPIA DE SENTENÇA   </td>
                                     <td>Ativo</td>
                                    <!-- <td>Removido</td>-->
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                  
                                  <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº 0000145-41.2009.8.20.0153-009 ENCAMINHA CÓPIA DE SENTENÇA   </td>
                                     <td>Offline</td>
                                     <!--<td>Incluso</td>-->
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                  
                                  <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº 0103159-40.2013.8.20.0108-005 ENCAMINHA SENTENÇA DE PROIBIÇÃO DE CONTRATAR COM O PODER PUBLICO </td>
                                     <td>Ativo</td>
                                     <!--<td>Incluso</td>-->
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                   <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº 0103159-40.2013.8.20.0108-005 ENCAMINHA SENTENÇA DE PROIBIÇÃO DE CONTRATAR COM O PODER PUBLICO </td>
                                     <td>Ativo</td>
                                     <!--<td>Incluso</td>-->
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                   <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº OJT.0010.000006-0/2019 PROIBIÇÃO DE CONTRATAR COM O PODER PÚBLICO(ALDANISIA RAMALHO PEREIRA DE SÁ)  </td>
                                     <td>Offline</td>
                                     <!--<td>Incluso</td>-->
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                    <tr>
                                     <td></td>
                                     <td>AQUISIÇÃO DE FECHADURA ELETRÔNICA   </td>
                                     <td>Ativo</td>
                                     <!--<td>Incluso</td>-->
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                  <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº 54/2014 ENCAMINHA CÓPIA DE COMPROVANTE DE ENTREGA DO SIAI 1º BIM/2010   </td>
                                     <td>Ativo</td>
                                     <!--<td>Incluso</td>-->
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                  <tr>
                                     <td></td>
                                     <td>CONVÊNIO TCE-RN, UFRN E FUNPEC (INSTITUTO METRÓPOLE DIGITAL)   </td>
                                     <td>Pendente</td>
                                     <!--<td>Incluso</td>-->
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                  <tr>
                                     <td></td>
                                     <td>CONCESSÃO DE SUPRIMENTO DE FUNDOS À DIN – SERVIÇO DE TERCEIRO - PESSOA JURÍDICA (3.3.90.39)    </td>
                                     <td>Pendente</td>
                                     <!--<td>Incluso</td>-->
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                  <tr>
                                     <td></td>
                                     <td>CONCESSÃO DE SUPRIMENTO DE FUNDOS À DIN – MATERIAL DE CONSUMO - PESSOA JURÍDICA (3.3.90.30)  </td>
                                     <td>Pendente</td>
                                     <!--<td>Incluso</td>-->
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                   <tr>
                                     <td></td>
                                     <td>DOCUMENTO PARA VALIDAÇÃO DA COMUNICAÇÃO ELETRÔNICA </td>
                                     <td>Pendente</td>
                                     <!--<td>Incluso</td>-->
                                     <td>
                                         <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                                  
                                   <tr>
                                     <td></td>
                                     <td>OFÍCIO Nº 177/2019 SOLICITA A SUBSTITUIÇÃO DO ITEM 11 DAS CONTAS DE GESTÃO .  </td>
                                     <td>Pendente</td>
                                     <!--<td>Incluso</td>-->
                                     <td>
                                          <ul class="legenda-acoes">
                                            <li><a href="editar-dimensao.php" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a></li>
                                            
                                            <li><a data-toggle="tooltip" data-placement="top" title="Excluir" onclick="alertaModal('handleDismiss')"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                   
                                  </tr>
                               </tbody>
                               
                            </table>
                              
                              

                           <div class="botoes-tabela">
                                  <button id="EditarForm" type="button" class="btn btn-primary " disabled>Editar</button>
                                  <button id="ExcluirForm" type="button" onclick="alertaModal('handleDismiss')" class="btn btn-danger " disabled>Excluir</button>
                                  <a  href="javascript:window.print();"  class="btn btn-outline-success" >Imprimir </a>
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



<script type="text/javascript">
 /* function filterGlobal () {
    $('#example').DataTable().search(
        $('#global_filter').val(),
        $('#global_regex').prop('checked'),
        $('#global_smart').prop('checked')
    ).draw();
}*/
 
function filterColumn ( i ) {
    $('#example').DataTable().column( i ).search(
        $('#col'+i+'_filter').val(),
       
    ).draw();
}
 
$(document).ready(function() {
    $('#example').DataTable();
 
    
 
    $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('div').attr('data-column') );
    } );

    $('#situacao').on('change', function(){
       table.search(this.value).draw();   
    });

    $('#status').on('change', function(){
       table.search(this.value).draw();   
    });

} );
</script>