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
           
            <li class="breadcrumb-item active" aria-current="page">Acordeon</li>
          
          </ol>
        </nav>
        <!-- MIOLO DE PÃO -->

         <section class="sessao-conteudo">
           <h1 class="titulo">
              Acordeon
            </h1>
         </section> 

        

            <div class="row">
                <div class="col-sm-12">
                 

<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Formulário #1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
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
                                    <input type="text" id="descricaopfa" name="descricaopfa" class="form-control form-control-lg" placeholder="Descrição do Plano de Fiscalização" >
                                     
                                  </div>

                                  <div class="col-sm-6 col-md-2">
                                     <input type="text" id="datainicio" name="datainicio" placeholder="Data de Início" class="datainicio form-control form-control-lg" />
                                  </div>

                                  <div class="col-sm-6 col-md-2">
                                     <input type="text" id="datafinal" name="datafinal" placeholder="Data Final" class="datafim form-control form-control-lg" />
                                  </div>
                                    
                                
                                  
                                 
                            </div><!--.row-->

                          </fieldset>
                          
                          <fieldset>
                            <legend>Dados do Processo</legend>

                              <div class="row">
                                  <div class="col-sm-4 ">
                                    <input type="number" name="numero" class="form-control form-control-lg" placeholder="Número" >
                                     
                                  </div>

                                  <div class="col-sm-4">
                                    <select name="ano" class="form-control form-control-lg">
                                      <option disabled selected>Ano</option>
                                      <option value="2017">2017</option>
                                      <option value="2018">2018</option>
                                      <option value="2019">2019</option>
                                    </select>
                                  </div>

                                  <div class="col-sm-4">
                                    <button class="btn btn-primary btn-lg " >Pesquisar</button>
                                  </div>

                              </div>
                             
                              <div class="row">
                                  <div class="col-sm-6 col-md-3">
                                    <input type="text" name="tipo" class="form-control form-control-lg" placeholder="Tipo de Processo" disabled>
                                     
                                  </div>
                                  <div class="col-sm-6 col-md-3">
                                    <input type="text" name="interessado" class="form-control form-control-lg" placeholder="Interessado" disabled>
                                     
                                  </div>
                                  <div class="col-sm-6 col-md-3">
                                    <input type="text" name="relator" class="form-control form-control-lg" placeholder="Relator" disabled>
                                     
                                  </div>
                                  <div class="col-sm-6 col-md-3">
                                    <input type="text" name="setor" class="form-control form-control-lg" placeholder="Setor Atual" disabled>
                                     
                                  </div>
                              </div>
                          </fieldset>
                         

                         <div class="botoes-de-envio">
                            <button class="btn btn-primary " >Salvar </button>
                          </div>

                        </form>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Formulário #2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Formulário #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
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

         