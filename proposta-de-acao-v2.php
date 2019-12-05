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
            <li class="breadcrumb-item"><a href="pfa.php">PFA</a></li>
            <li class="breadcrumb-item active" aria-current="page">Propostas de Ação</li>
          </ol>
        </nav>
        <!-- MIOLO DE PÃO -->



         <section class="sessao-conteudo">
           <h1 class="titulo">
              Propostas de Ação (V2)

            </h1>
         </section> 

        <div id="content-2" class="contentScroll mCustomScrollbar">

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
                      <legend>Cadastro</legend>
                     
                        <p class="right-form">(*) Campos Obrigatórios</p>
                   
                        <div class="row">
                            <div class="col-sm-12 ">
                              <label for="tituloproposta">Titulo da Proposta *</label>
                              
                              <input type="text" id="tituloproposta" name="tituloproposta" class="form-control " >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-3">
                                <label for="dimensaoproposta">Dimensão da Proposta *</label>
                                 <select id="dimensaoproposta" name="dimensaoproposta" class="form-control ">
                                  <option disabled selected>Selecione</option>
                                  <option value="Seleção 01">Seleção 02</option>
                                  <option value="Seleção 02">Seleção 02</option>
                                  <option value="Seleção 03">Seleção 03</option>
                                
                                </select>
                              </div>

                               <div class="col-sm-12 col-md-3">
                                <label for="situacaoproposta">Situação da Proposta *</label>
                                 <select id="situacaoproposta" name="situacaoproposta" class="form-control ">
                                  <option disabled selected>Selecione</option>
                                  <option value="Seleção 01">Seleção 02</option>
                                  <option value="Seleção 02">Seleção 02</option>
                                  <option value="Seleção 03">Seleção 03</option>
                                
                                </select>
                              </div>

                            <div class="col-sm-12 col-md-3">
                               <label for="unidadetecnica">Unidade Técnica *</label>
                                <select id="unidadetecnica" name="unidadetecnica" class="form-control ">
                                  <option disabled selected>Selecione</option>
                                  <option value="Diretoria Administrativa Direta">Diretoria Administrativa Direta</option>
                                  <option value="Diretoria Administrativa Indireta">Diretoria Administrativa Indireta</option>
                                  <option value="Diretoria Administrativa Municipal">Diretoria Administrativa Municipal</option>
                                </select>
                              </div>

                              <div class="col-sm-12 col-md-3">
                                <label for="tipodetrabalho">Tipo de Trabalho *</label>
                                 <select id="tipodetrabalho" name="tipodetrabalho" class="form-control">
                                  <option disabled selected>Selecione</option>
                                  <option value="Em Elaboração">Em Elaboração</option>
                                  <option value="Submetida para Análise">Submetida para Análise</option>
                                  <option value="Devolvida para Correção">Devolvida para Correção</option>
                                </select>
                              </div>

                              
                            
                            </div>
                              <div class="row">
                                <div class="col-sm-12 ">
                                  <label for="objetivoproposta">Objetivo da Proposta *</label>
                                   <textarea class="form-control " id="objetivoproposta" name="objetivoproposta"  rows="4"></textarea>
                                </div>                    
                              </div><!--.row-->

                              <div class="row">
                                <div class="col-sm-12 ">
                                  <label for="usuarioprevisto">Usuários Previstos *</label>
                                   <textarea class="form-control " id="usuarioprevisto" name="usuarioprevisto" rows="4"></textarea>
                                </div>                    
                              </div><!--.row-->

                              <div class="row">

                                  <div class="col-sm-12">

                                     <div class="botoes-de-envio">
                                        <button class="btn btn-primary" >Salvar</button>
                                      </div>
                          
                                  </div>
                              </div>

                          </fieldset>
                          
                         

                        

                        </form>


                    
                </div>
                
            </div>
        </div>
      </div><!--.col-md-10 GERAL DO MIOLO-->


  </div><!-- /row  GERAL DO MIOLO-->

</div><!-- /container-fluid // Engloba todo o conteudo do projeto menos o topo-->
          

<?php include ('_footer.php'); ?>

<script type="text/javascript">
    $.validator.setDefaults( {
      submitHandler: function () {
        Swal.fire({
          title: 'Sucesso!',
          text: 'Seu cadastro foi atualizado.',
          type: 'success',
          confirmButtonText: 'Fechar'
        })
      }
    } );

    $( document ).ready( function () {
      $( "#signupForm" ).validate( {
        rules: {
          firstname: "required",
         
          
          
          email: {
            required: true,
            email: true
          },
         
        },
        messages: {
          firstname: "Digite seu nome completo",
         
          
          
          email: "Digite um e-mail valido"
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `invalid-feedback` class to the error element
          error.addClass( "invalid-feedback" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.next( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
        }
      } );

    } );
  </script>

         