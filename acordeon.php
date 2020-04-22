<?php include ('_header.php'); ?>

<div class="bg-cinza container-fluid"> 
  
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

        
                  <!-- ALERTA DE FORM  ENVIADO -->
                        <div id="alerta-confirmacao" class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>AÇÃO REALIZADA COM SUCESSO!</strong> 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                    <!-- FIM ALERTA DE FORM  ENVIADO -->

            <div class="row">
                <div class="col-sm-12">
                 

                  <form id="FormCadastro" action="#" method="get" >
                    <fieldset>
                        <legend>Cadastro</legend>
                     
                        <p class="right-form">(*) Campos Obrigatórios</p>

                            <div class="accordion" id="accordionExample">
                              <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span class="arrow-sp"></span>
                                      PROCESSO
                                    </button>
                                  </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                  <div class="card-body">
                                    
                                    <div class="row">

                                        <div class="col-sm-12 col-md-4">
                                          <label for="tituloproposta">Nº Processo *</label>
                                          <input type="text" id="tituloproposta" name="tituloproposta" class="form-control " >
                                        </div>

                                        <div class="col-sm-12 col-md-4">
                                          <label for="tituloproposta">Ano Processo *</label>
                                          <input type="text" id="tituloproposta" name="tituloproposta" class="form-control " >
                                        </div>

                                        <div class="col-sm-12 col-md-4">
                                         <label for="situacaoproposta">Situação da Proposta *</label>
                                         <select id="situacaoproposta" name="situacaoproposta" class="form-control ">
                                          <option disabled selected>Selecione</option>
                                          <option value="Seleção 01">Seleção 02</option>
                                          <option value="Seleção 02">Seleção 02</option>
                                          <option value="Seleção 03">Seleção 03</option>
                                        </select>
                                        </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingTwo">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span class="arrow-sp"></span>
                                     ASSOCIADOS
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-sm-12 ">
                                           <label for="situacaoproposta">INTERESSADO</label>
                                           <select id="situacaoproposta" name="situacaoproposta" class="form-control ">
                                            <option disabled selected>Selecione</option>
                                            <option value="Seleção 01">Seleção 02</option>
                                            <option value="Seleção 02">Seleção 02</option>
                                            <option value="Seleção 03">Seleção 03</option>
                                          </select>
                                      </div>
                                    </div><!--.row-->
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingThree">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span class="arrow-sp"></span>
                                      DADOS DA COMUNICAÇÃO
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-sm-12 ">
                                           <label for="situacaoproposta">MODELO MALA DIRETA</label>
                                           <select id="situacaoproposta" name="situacaoproposta" class="form-control ">
                                            <option disabled selected>Selecione</option>
                                            <option value="Seleção 01">Seleção 02</option>
                                            <option value="Seleção 02">Seleção 02</option>
                                            <option value="Seleção 03">Seleção 03</option>
                                          </select>
                                      </div>
                                    </div><!--.row-->

                               

                                  </div>
                                </div>
                              </div>
                            </div><!--accordion-->

                             <div class="row">

                                  <div class="col-sm-12">

                                     <div class="botoes-de-envio">
                                        <button class="btn btn-sm btn-primary">Salvar</button>
                                      </div>
                          
                                  </div>
                              </div>

                      </fieldset>
                    </form>
                </div><!--col-sm-12 -->              
            </div><!--row-->    
        
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

         