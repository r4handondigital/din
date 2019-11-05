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
            <li class="breadcrumb-item"><a>PFA</a></li>
            <li class="breadcrumb-item" href="pfa.php" aria-current="page">Listagem de PFA's</li>
            <li class="breadcrumb-item active" aria-current="page">Nova PFA</li>
          
          </ol>
        </nav>
        <!-- MIOLO DE PÃO -->

         <section class="sessao-conteudo">
           <h1 class="titulo">
              Nova PFA
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
                      <legend>Dados do PFA</legend>
                        
                        
                            <div class="row">
                                <div class="col-sm-12 col-md-8">
                                    <input type="text" id="nome" name="nome" class="form-control form-control-lg" placeholder="Descrição do Plano de Fiscalização" >
                                     
                                  </div>

                                  <div class="col-sm-6 col-md-2">
                                     <input type="text" id="datainicio" name="datainicio" placeholder="Data de Início" class="datainicio form-control form-control-lg" />
                                  </div>

                                  <div class="col-sm-6 col-md-2">
                                     <input type="text" id="datafinal" name="datafinal" placeholder="Data Final" class="datafim form-control form-control-lg" />
                                  </div>
                                    
                                    <div class="input-group input-daterange">
                                      <input type="text" class="form-control" value="2012-04-05">
                                      <div class="input-group-addon">to</div>
                                      <input type="text" class="form-control" value="2012-04-19">
                                  </div>
                                  
                                 
                            </div><!--.row-->

                          </fieldset>

                         

                         <div class="botoes-de-envio">
                                  
                                  <button class="btn btn-primary" >Salvar dimensão</button>

                                 
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

         