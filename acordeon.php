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

                          
                          <div class="row">
                            <div class="col-sm-12">
                             <div class="box-movel-acordeon">
                              <h5 class="acordeon">PROCESSO <span class="arrow-sp"></span></h5>
                              <div class="acordeon">
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
                            </div><!--.box-movel-acordeon-->
                            <div class="box-movel-acordeon">
                              <h5 class="acordeon">ASSOCIADOS <span class="arrow-sp"></span></h5>
                              <div class="acordeon">
                                <div class="row">
                                      <div class="col-sm-12 ">
                                           <label for="situacaoproposta">INTERESSADO </label>
                                           <select id="situacaoproposta" name="situacaoproposta" class="form-control ">
                                            <option disabled selected>Selecione</option>
                                            <option value="Seleção 01">Seleção 02</option>
                                            <option value="Seleção 02">Seleção 02</option>
                                            <option value="Seleção 03">Seleção 03</option>
                                          </select>
                                      </div>
                                    </div><!--.row-->
                              </div>
                            </div><!--.box-movel-acordeon-->
                            <div class="box-movel-acordeon">
                              <h5 class="acordeon">DADOS DA COMUNICAÇÃO <span class="arrow-sp"></span></h5>
                              <div class="acordeon">
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
                            </div><!--.box-movel-acordeon-->
  
                          </div>
                        </div>

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

  $('h5.acordeon').click(function(){
    $(this).parent().find('div.acordeon').slideToggle("slow");
    $(this).toggleClass('atvmod');
   
  });


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

         