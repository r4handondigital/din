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
            <li class="breadcrumb-item active" aria-current="page">Formulário ABAS</li>
          </ol>
        </nav>
        <!-- MIOLO DE PÃO -->



        <!-- <section class="sessao-conteudo">
           <h1 class="titulo">
             Formulário ABAS

            </h1>
         </section> -->

      
            <div class="row">
              <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Formulário 01</a>
                  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Formulário 02</a>
                  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Formulário 03</a>
                  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Formulário 04</a>
                </div>
              </div>
              <div class="col-9">
                <div id="content-2" class="contentScroll mCustomScrollbar">
                  <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                         <!-- ALERTA DE FORM  ENVIADO -->
                        <div id="alerta-confirmacao" class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>AÇÃO REALIZADA COM SUCESSO!</strong> 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                    <!-- FIM ALERTA DE FORM  ENVIADO -->

                  <form id="FormCadastro" action="#" method="get" >
                      
                      <h3>CADASTRO 01</h3>
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
                          
                         
 <h3>CADASTRO 02</h3>
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
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
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
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                      
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec libero urna. Etiam lacinia sagittis tempus. Nunc ac velit augue. Nam dui libero, cursus quis dui eu, aliquet feugiat risus. Mauris ullamcorper lectus sit amet sapien volutpat vulputate. Nullam feugiat ligula at metus pulvinar, quis ultrices odio imperdiet. Fusce est ligula, sagittis vitae eros vel, egestas porta sapien. Integer commodo hendrerit dui, id laoreet leo pharetra a. Pellentesque blandit erat quis nibh ornare, eu tristique mi scelerisque. Aliquam quis dolor enim. Sed gravida, quam non convallis lobortis, lacus quam vehicula quam, id ultricies sapien enim et elit. Etiam imperdiet purus quis mi rhoncus dapibus.</p>
<p>
In nunc velit, vehicula id felis at, aliquam fermentum nibh. Morbi a tincidunt dolor, eu imperdiet diam. Cras egestas venenatis hendrerit. Integer congue placerat ex. Nulla orci enim, pretium ac purus nec, accumsan dapibus augue. Sed at imperdiet purus, gravida lobortis turpis. Quisque non eros pretium turpis pretium ultrices vel at augue. Nulla at augue sit amet lorem sodales iaculis condimentum id est. Donec dui eros, vulputate sed auctor ac, elementum a tortor. Praesent quis risus semper, convallis velit a, tristique ligula. Donec gravida est et varius rutrum. Sed vitae dolor vel dui aliquet rutrum eget sed neque. Nunc aliquet lacus ac arcu porta maximus.</p>

 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec libero urna. Etiam lacinia sagittis tempus. Nunc ac velit augue. Nam dui libero, cursus quis dui eu, aliquet feugiat risus. Mauris ullamcorper lectus sit amet sapien volutpat vulputate. Nullam feugiat ligula at metus pulvinar, quis ultrices odio imperdiet. Fusce est ligula, sagittis vitae eros vel, egestas porta sapien. Integer commodo hendrerit dui, id laoreet leo pharetra a. Pellentesque blandit erat quis nibh ornare, eu tristique mi scelerisque. Aliquam quis dolor enim. Sed gravida, quam non convallis lobortis, lacus quam vehicula quam, id ultricies sapien enim et elit. Etiam imperdiet purus quis mi rhoncus dapibus.</p>
<p>
In nunc velit, vehicula id felis at, aliquam fermentum nibh. Morbi a tincidunt dolor, eu imperdiet diam. Cras egestas venenatis hendrerit. Integer congue placerat ex. Nulla orci enim, pretium ac purus nec, accumsan dapibus augue. Sed at imperdiet purus, gravida lobortis turpis. Quisque non eros pretium turpis pretium ultrices vel at augue. Nulla at augue sit amet lorem sodales iaculis condimentum id est. Donec dui eros, vulputate sed auctor ac, elementum a tortor. Praesent quis risus semper, convallis velit a, tristique ligula. Donec gravida est et varius rutrum. Sed vitae dolor vel dui aliquet rutrum eget sed neque. Nunc aliquet lacus ac arcu porta maximus.</p>

 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec libero urna. Etiam lacinia sagittis tempus. Nunc ac velit augue. Nam dui libero, cursus quis dui eu, aliquet feugiat risus. Mauris ullamcorper lectus sit amet sapien volutpat vulputate. Nullam feugiat ligula at metus pulvinar, quis ultrices odio imperdiet. Fusce est ligula, sagittis vitae eros vel, egestas porta sapien. Integer commodo hendrerit dui, id laoreet leo pharetra a. Pellentesque blandit erat quis nibh ornare, eu tristique mi scelerisque. Aliquam quis dolor enim. Sed gravida, quam non convallis lobortis, lacus quam vehicula quam, id ultricies sapien enim et elit. Etiam imperdiet purus quis mi rhoncus dapibus.</p>
<p>
In nunc velit, vehicula id felis at, aliquam fermentum nibh. Morbi a tincidunt dolor, eu imperdiet diam. Cras egestas venenatis hendrerit. Integer congue placerat ex. Nulla orci enim, pretium ac purus nec, accumsan dapibus augue. Sed at imperdiet purus, gravida lobortis turpis. Quisque non eros pretium turpis pretium ultrices vel at augue. Nulla at augue sit amet lorem sodales iaculis condimentum id est. Donec dui eros, vulputate sed auctor ac, elementum a tortor. Praesent quis risus semper, convallis velit a, tristique ligula. Donec gravida est et varius rutrum. Sed vitae dolor vel dui aliquet rutrum eget sed neque. Nunc aliquet lacus ac arcu porta maximus.</p>

                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec libero urna. Etiam lacinia sagittis tempus. Nunc ac velit augue. Nam dui libero, cursus quis dui eu, aliquet feugiat risus. Mauris ullamcorper lectus sit amet sapien volutpat vulputate. Nullam feugiat ligula at metus pulvinar, quis ultrices odio imperdiet. Fusce est ligula, sagittis vitae eros vel, egestas porta sapien. Integer commodo hendrerit dui, id laoreet leo pharetra a. Pellentesque blandit erat quis nibh ornare, eu tristique mi scelerisque. Aliquam quis dolor enim. Sed gravida, quam non convallis lobortis, lacus quam vehicula quam, id ultricies sapien enim et elit. Etiam imperdiet purus quis mi rhoncus dapibus.</p>
<p>
In nunc velit, vehicula id felis at, aliquam fermentum nibh. Morbi a tincidunt dolor, eu imperdiet diam. Cras egestas venenatis hendrerit. Integer congue placerat ex. Nulla orci enim, pretium ac purus nec, accumsan dapibus augue. Sed at imperdiet purus, gravida lobortis turpis. Quisque non eros pretium turpis pretium ultrices vel at augue. Nulla at augue sit amet lorem sodales iaculis condimentum id est. Donec dui eros, vulputate sed auctor ac, elementum a tortor. Praesent quis risus semper, convallis velit a, tristique ligula. Donec gravida est et varius rutrum. Sed vitae dolor vel dui aliquet rutrum eget sed neque. Nunc aliquet lacus ac arcu porta maximus.</p>

 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec libero urna. Etiam lacinia sagittis tempus. Nunc ac velit augue. Nam dui libero, cursus quis dui eu, aliquet feugiat risus. Mauris ullamcorper lectus sit amet sapien volutpat vulputate. Nullam feugiat ligula at metus pulvinar, quis ultrices odio imperdiet. Fusce est ligula, sagittis vitae eros vel, egestas porta sapien. Integer commodo hendrerit dui, id laoreet leo pharetra a. Pellentesque blandit erat quis nibh ornare, eu tristique mi scelerisque. Aliquam quis dolor enim. Sed gravida, quam non convallis lobortis, lacus quam vehicula quam, id ultricies sapien enim et elit. Etiam imperdiet purus quis mi rhoncus dapibus.</p>
<p>
In nunc velit, vehicula id felis at, aliquam fermentum nibh. Morbi a tincidunt dolor, eu imperdiet diam. Cras egestas venenatis hendrerit. Integer congue placerat ex. Nulla orci enim, pretium ac purus nec, accumsan dapibus augue. Sed at imperdiet purus, gravida lobortis turpis. Quisque non eros pretium turpis pretium ultrices vel at augue. Nulla at augue sit amet lorem sodales iaculis condimentum id est. Donec dui eros, vulputate sed auctor ac, elementum a tortor. Praesent quis risus semper, convallis velit a, tristique ligula. Donec gravida est et varius rutrum. Sed vitae dolor vel dui aliquet rutrum eget sed neque. Nunc aliquet lacus ac arcu porta maximus.</p>

 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec libero urna. Etiam lacinia sagittis tempus. Nunc ac velit augue. Nam dui libero, cursus quis dui eu, aliquet feugiat risus. Mauris ullamcorper lectus sit amet sapien volutpat vulputate. Nullam feugiat ligula at metus pulvinar, quis ultrices odio imperdiet. Fusce est ligula, sagittis vitae eros vel, egestas porta sapien. Integer commodo hendrerit dui, id laoreet leo pharetra a. Pellentesque blandit erat quis nibh ornare, eu tristique mi scelerisque. Aliquam quis dolor enim. Sed gravida, quam non convallis lobortis, lacus quam vehicula quam, id ultricies sapien enim et elit. Etiam imperdiet purus quis mi rhoncus dapibus.</p>
<p>
In nunc velit, vehicula id felis at, aliquam fermentum nibh. Morbi a tincidunt dolor, eu imperdiet diam. Cras egestas venenatis hendrerit. Integer congue placerat ex. Nulla orci enim, pretium ac purus nec, accumsan dapibus augue. Sed at imperdiet purus, gravida lobortis turpis. Quisque non eros pretium turpis pretium ultrices vel at augue. Nulla at augue sit amet lorem sodales iaculis condimentum id est. Donec dui eros, vulputate sed auctor ac, elementum a tortor. Praesent quis risus semper, convallis velit a, tristique ligula. Donec gravida est et varius rutrum. Sed vitae dolor vel dui aliquet rutrum eget sed neque. Nunc aliquet lacus ac arcu porta maximus.</p></div>
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

         