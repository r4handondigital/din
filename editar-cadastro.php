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
            <li class="breadcrumb-item"><a href="#">Administrativo</a></li>
            <li class="breadcrumb-item" aria-current="page">Cadastro</li>
            <li class="breadcrumb-item active" aria-current="page">Meu Perfil</li>
          
          </ol>
        </nav>
        <!-- MIOLO DE PÃO -->

         <section class="sessao-conteudo">
           <h1 class="titulo">
              Editar Cadastro
            </h1>
         </section> 

        

            <div class="row">
                <div class="col-md-10 col-sm-12">
                  <form id="signupForm" action="#" method="get" >

                    <fieldset>
                      <legend>Dados Pessoais</legend>
                        
                        
                            <div class="row">
                                <div class="col">
                                    <input type="text" id="firstname" name="firstname" class="form-control form-control-lg" placeholder="Nome" >
                                     
                                  </div>
                                  <div class="col">
                                    <input type="text" id="email" name="email" class="form-control form-control-lg" placeholder="E-mail">
                                  </div>
                                  <div class="col-3">
                                    <input type="text" id="cracha" nome="cracha" class="form-control form-control-lg" placeholder="Nome no Crachá">
                                  </div>
                            </div><!--.row-->

                            <div class="row">
                                <div class="col">
                                     <input type="text" id="nascimento" name="nascimento" placeholder="Data de Nascimento" class="datepicker form-control form-control-lg" />
                                  </div>
                                  <div class="col">
                                    <select class="form-control form-control-lg">
                                      <option selected disabled>Nacionalidade</option>
                                      <option value="">Brasileira</option>
                                      <option value="">Estrangeiro</option>
                                    </select>
                                  </div>
                                  <div class="col">
                                    <input type="text" class="form-control form-control-lg" placeholder="Número do documento">
                                  </div>
                                  <div class="col-auto">
                                     <select class="form-control form-control-lg">
                                      <option selected disabled>Tipo </option>
                                      <option value="">Identidate</option>
                                      <option value="">CHN</option>
                                    </select>
                                  </div>
                                  <div class="col-auto">
                                    <input type="text" class="form-control form-control-lg" placeholder="Orgão emissor">
                                  </div>
                            </div><!--.row-->

                            <div class="row">
                                <div class="col">
                                     <select class="form-control form-control-lg">
                                      <option selected disabled>Gênero</option>
                                      <option value="">Masculino</option>
                                      <option value="">Feminino</option>
                                    </select>
                                  </div>
                                  <div class="col">
                                    <select class="form-control form-control-lg">
                                      <option selected disabled>Nacionalidade</option>
                                      <option value="">Brasileira</option>
                                      <option value="">Estrangeiro</option>
                                    </select>
                                  </div>
                                  <div class="col">
                                    <input type="tel" id="telefone" class="form-control form-control-lg" placeholder="Telefone">
                                  </div>
                                  <div class="col">
                                    <input type="tel" id="celular" class="form-control form-control-lg" placeholder="Celular">
                                  </div>
                            </div><!--.row-->


                            <div class="row">
                                  <div class="col-3">
                                    <input type="text" name="cep" id="cep" onblur="pesquisacep(this.value);" class="form-control form-control-lg" placeholder="CEP">
                                  </div>
                                <div class="col">
                                    <input type="text" name="rua" id="rua" class="form-control form-control-lg" placeholder="Endereço">
                                  </div>   
                                  <div class="col-2">
                                    <input type="number" name="numero" id="numero" class="form-control form-control-lg" placeholder="Número">
                                  </div>                               
                                  
                            </div><!--.row-->

                            <div class="row">
                                  <div class="col">
                                    <input type="text" name="bairro" id="bairro" class="form-control form-control-lg" placeholder="Bairro">
                                  </div>
                                <div class="col">
                                    <input type="text" name="cidade" id="cidade" class="form-control form-control-lg" placeholder="Cidade">
                                  </div>  

                                  <div class="col-2">
                                    <input type="text" name="uf" id="uf" class="form-control form-control-lg" placeholder="Estado">
                                  </div>                                
                                  
                            </div><!--.row-->

                            <div class="row">
                                  <div class="col">
                                    <textarea class="form-control form-control-lg" placeholder="Observação" rows="3"></textarea>
                                  </div>
                                                             
                                  
                            </div><!--.row-->


                          </fieldset>

                          <fieldset>
                            <legend>Enviar arquivos</legend>

                            <div class="row">
                                <div class="col">
                                    
                                    <div id="listas">
                                        <div class="box-input"><input type="file" class="form-control-file" name="arquivos[]" ></div>
                                    </div>
                                                                  

                                </div>  <!--.col--> 


                            </div><!--.row-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="button" id="add_field" class="bt-anexo btn btn-outline-secondary form-control-lg btn-block">+ adcionar novo anexo</button>
                                </div>
                            </div>

                          </fieldset>

                         <div class="botoes-de-envio">
                                  <button  type="submit" id="envio_sucesso" class="btn btn-primary " >Enviar formulário</button>

                                 
                              </div>

                        </form>


                    
                </div>
                <div class="col-md-2 col-sm-12">
                    <img src="libs/images/capa-perfil.jpg" class="img-fluid">
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

         