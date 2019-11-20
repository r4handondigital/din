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
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="dimensao.php">Dimensão</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar Dimensão</li>
          
          </ol>
        </nav>
        <!-- MIOLO DE PÃO -->

         <section class="sessao-conteudo">
           <h1 class="titulo">
              Editar Dimensão
            
            </h1>
         </section> 

        

            <div class="row">
                <div class="col-sm-12">
                  <!-- ALERTA DE FORM  ENVIADO -->
                        <div id="alerta-confirmacao" class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>DIMENSÃO EDITADA COM SUCESSO!</strong> 
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
                                    <input type="text" name="ordem" class="form-control form-control-lg" placeholder="1" >
                                     
                                  </div>

                                  <div class="col-sm-3 col-md-3">
                                    <select name="situacao" class="form-control form-control-lg">
                                      <option disabled>Situação</option>
                                      <option selected value="ativos">Ativo</option>
                                      <option value="inativos">Inativo</option>
                                      <option value="pendentes">Pendente</option>
                                    </select>
                                  </div>

                                  <div class="col-sm-12 col-md-8">
                                    <input type="text" name="nome" class="form-control form-control-lg" placeholder="Atuação Concomitante">
                                  </div>

                                  
                                 
                            </div><!--.row-->

                          </fieldset>

                         

                         <div class="botoes-de-envio">
                                  
                                  <button  type="button"id="salvar_formz" class="btn btn-primary " >Salvar </button>
                                  <button  type="reset"  class="btn btn-outline-success" >Limpar </button>

                                  
                              </div>

                        </form>


                    
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

         