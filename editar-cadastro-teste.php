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
                  <form id="signupForm" method="post" class="form-horizontal" action="">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="firstname">First name</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" />
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="lastname">Last name</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" />
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="username">Username</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="email">Email</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Email" />
                </div>
              </div>

             


              <div class="form-group row">
                <div class="col-sm-9 offset-sm-4">
                  <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Sign up</button>
                </div>
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



         