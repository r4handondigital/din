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
              Acordeon Modelo 2
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
              </div>
          </div>

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
                                  <button class="btn btn-link" id="lkacc" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    PESSOAS ASSOCIADAS AO PROCESSO: 085584866-984
                                  </button>
                                </h5>
                              </div>

                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                  <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th style="text-align: left;">Nome</th>
                                        <th>Função no Processo</th>
                                        <th>Endereço</th>
                                        <th>Advogado</th>
                                        <th>Disponivel em Com. Ato</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td><input type="radio" class="cleanx" name="limpache"></td>
                                        <td style="text-align: left;">Antonio Vasconcelos de Araujo</td>
                                        <td>Sigiloso</td>
                                        <td>Av. Alexandirnho de Alencar, 789 - Tirol</td>
                                        <td>Marcos Antones Bragança</td>
                                        <td>Referido</td>
                                      </tr>
                                       <tr>
                                        <td><input type="radio" class="cleanx" name="limpache"></td>
                                        <td style="text-align: left;">Antonio Vasconcelos de Araujo</td>
                                        <td>Sigiloso</td>
                                        <td>Av. Alexandirnho de Alencar, 789 - Tirol</td>
                                        <td>Marcos Antones Bragança</td>
                                        <td>Referido</td>
                                      </tr>
                                       <tr>
                                        <td><input type="radio" class="cleanx" name="limpache"></td>
                                        <td style="text-align: left;">Antonio Vasconcelos de Araujo</td>
                                        <td>Sigiloso</td>
                                        <td>Av. Alexandirnho de Alencar, 789 - Tirol</td>
                                        <td>Marcos Antones Bragança</td>
                                        <td>Referido</td>
                                      </tr>
                                       <tr>
                                        <td><input type="radio" class="cleanx" name="limpache"></td>
                                        <td style="text-align: left;">Antonio Vasconcelos de Araujo</td>
                                        <td>Sigiloso</td>
                                        <td>Av. Alexandirnho de Alencar, 789 - Tirol</td>
                                        <td>Marcos Antones Bragança</td>
                                        <td>Referido</td>
                                      </tr>
                                       <tr>
                                        <td><input type="radio" class="cleanx" name="limpache"></td>
                                        <td style="text-align: left;">Antonio Vasconcelos de Araujo</td>
                                        <td>Sigiloso</td>
                                        <td>Av. Alexandirnho de Alencar, 789 - Tirol</td>
                                        <td>Marcos Antones Bragança</td>
                                        <td>Referido</td>
                                      </tr>
                                       <tr>
                                        <td><input type="radio" class="cleanx" name="limpache"></td>
                                        <td style="text-align: left;">Antonio Vasconcelos de Araujo</td>
                                        <td>Sigiloso</td>
                                        <td>Av. Alexandirnho de Alencar, 789 - Tirol</td>
                                        <td>Marcos Antones Bragança</td>
                                        <td>Referido</td>
                                      </tr>
                                    </tbody>
                                  </table>

                                  

                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ADVOGADOS
                                  </button>
                                </h5>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                 <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th style="text-align: left;">Advogado</th>
                                       
                                        <th>Situação</th>
                                       
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td><input type="radio" class="cleanx" name="limpache"></td>
                                        
                                        <td style="text-align: left;">Marcos Antones Bragança</td>
                                        <td>Referido</td>
                                      </tr>
                                       <tr>
                                        <td><input type="radio" class="cleanx" name="limpache"></td>
                                        
                                        <td style="text-align: left;">Marcos Antones Bragança</td>
                                        <td>Referido</td>
                                      </tr>
                                       <tr>
                                        <td><input type="radio" class="cleanx" name="limpache"></td>
                                        
                                        <td style="text-align: left;">Marcos Antones Bragança</td>
                                        <td>Referido</td>
                                      </tr>
                                       <tr>
                                        <td><input type="radio" class="cleanx" name="limpache"></td>
                                        
                                        <td style="text-align: left;">Marcos Antones Bragança</td>
                                        <td>Referido</td>
                                      </tr>
                                       <tr>
                                        <td><input type="radio" class="cleanx" name="limpache"></td>
                                        
                                        <td style="text-align: left;">Marcos Antones Bragança</td>
                                        <td>Referido</td>
                                      </tr>
                                       <tr>
                                        <td><input type="radio" class="cleanx" name="limpache"></td>
                                        
                                        <td style="text-align: left;">Marcos Antones Bragança</td>
                                        <td>Referido</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                         
                          </div>

                            <div class="row">

                                  <div class="col-sm-12">

                                     <div class="botoes-de-envio">
                                        
                                       <button id="btincpessoal" class="btn btn-sm btn-primary" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Incluir pessoa</button>

                                       <button id="btadvogado" class="btn btn-sm btn-primary"  style="display: none;">Incluir advogado</button>
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

  $('#btincpessoal').click(function(){
    $(this).addClass('btnoff');
    $('#btadvogado').addClass("ativobtn");
  });

  $('#lkacc').click(function(){
    $("#btincpessoal").toggleClass('btnoff');
    $('#btadvogado').toggleClass("ativobtn") ;

  });



  $('h5.acordeon').click(function(){
    $(this).parent().find('div.acordeon').slideToggle("slow");
    $("#btadvogado").attr('display','block');
   
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

          if ( element.prop( "type" ) === "radio" ) {
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

         