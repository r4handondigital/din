<?php include ('_header.php'); ?>

<div class="bg-cinza container-fluid"> 
  
  <div class="row flex-xl-nowrap" id="bloco-site">
      
    <div class="col-md-3 col-xl-2 mov-menu" id="bg-menu">

       <?php include ('_menu.php'); ?>

      </div><!-- /col  // Menu lateral (DESKTOP) -->
 
      <div class="col-md-9 col-xl-10 col-sm-12" id="geral-conteudo">
        <!-- MIOLO DE PÃO -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="inicial.php"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Modelos de Página</a></li>
           
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
                             <div class="box-movel-acordeon firstac">
                              <h5 class="acordeon atvmod" id="lkprocesso">DADOS PESSOAIS<span class="arrow-sp"><i class="fas fa-chevron-down"></i></span></h5>
                              <div class="acordeon">

                                <div class="row">
                                    <div class="col-sm-12 ">
                                          <label for="tituloproposta">Nome*</label>
                                          <input type="text" id="tituloproposta" name="tituloproposta" class="form-control " >
                                        </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                          <label for="tituloproposta">RG*</label>
                                          <input type="text" id="tituloproposta" name="tituloproposta" class="form-control " >
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                          <label for="tituloproposta">CPF*</label>
                                          <input type="text" id="tituloproposta" name="tituloproposta" class="form-control " >
                                        </div>
                                </div>

                                <div class="row">                                       

                                        <div class="col-sm-12 col-md-6">
                                          <label for="tituloproposta">E-mail*</label>
                                          <input type="text" id="tituloproposta" name="tituloproposta" class="form-control " >
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                         <label for="situacaoproposta">Sexo *</label>
                                         <select id="situacaoproposta" name="situacaoproposta" class="form-control ">
                                          <option disabled selected>Selecione</option>
                                          <option value="Seleção 01">Masculino</option>
                                          <option value="Seleção 02">Feminino</option>
                                         
                                        </select>
                                        </div>
                                    
                              </div> 

                              </div>
                            </div><!--.box-movel-acordeon-->
                            <div class="box-movel-acordeon">
                              <h5 class="acordeon" class="lkassociados">DADOS DE ENDEREÇO <span class="arrow-sp"><i class="fas fa-chevron-down"></i></span></h5>
                              <div class="acordeon">
                                     <div class="row">
                                    <div class="col-sm-12 ">
                                          <label for="tituloproposta">ENDEREÇO:</label>
                                          <input type="text" id="tituloproposta" name="tituloproposta" class="form-control " >
                                        </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                          <label for="tituloproposta">BAIRRO*</label>
                                          <input type="text" id="tituloproposta" name="tituloproposta" class="form-control " >
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                          <label for="tituloproposta">CIDADE*</label>
                                          <input type="text" id="tituloproposta" name="tituloproposta" class="form-control " >
                                        </div>
                                </div>  

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                          <label for="tituloproposta">ESTADO*</label>
                                          <input type="text" id="tituloproposta" name="tituloproposta" class="form-control " >
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                          <label for="tituloproposta">CEP*</label>
                                          <input type="text" id="tituloproposta" name="tituloproposta" class="form-control " >
                                        </div>
                                </div>  

                              </div><!--.acordeon-->
                            </div><!--.box-movel-acordeon-->
                            <div class="box-movel-acordeon">
                              <h5 class="acordeon" id="lkcomunicacao">DADOS PROFISSIONAIS <span class="arrow-sp"><i class="fas fa-chevron-down"></i></span></h5>
                              <div class="acordeon">

                                 <div class="row">
                                      <div class="col-sm-12 col-md-4">
                                           <label for="tituloproposta">MATRICULA*</label>
                                          <input type="text" id="tituloproposta" name="tituloproposta" class="form-control " >
                                      </div>
                                       <div class="col-sm-12 col-md-4">
                                           <label for="situacaoproposta">SETOR</label>
                                           <select id="situacaoproposta" name="situacaoproposta" class="form-control ">
                                            <option disabled selected>Selecione</option>
                                            <option value="Seleção 01">Seleção 02</option>
                                            <option value="Seleção 02">Seleção 02</option>
                                            <option value="Seleção 03">Seleção 03</option>
                                          </select>
                                      </div>
                                       <div class="col-sm-12 col-md-4">
                                           <label for="situacaoproposta">DISPONIBILIDADE</label>
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
                                        <button class="btn btn-primary" >Salvar</button>
                                         <a href="inicial.php"  class="btn btn-outline-success" >Voltar </a>
                                      </div>
                          
                                  </div>
                              </div><!--.row-->
                           

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

         