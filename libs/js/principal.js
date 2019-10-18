$(document).ready(function(){

    $( ".mn_sub" ).click(function() {
      $( this ).toggleClass( "setnav" );
    });

    $( ".mn_sb_sb" ).click(function() {
      $( this ).toggleClass( "atv" );
    });

    //MOBILE MENU
    $(".menu-mov").click(function () {
        $("#anima_mobile").toggleClass("atv_men");
    });

    $('[data-toggle="tooltip"]').tooltip();


    $("#cpf").mask("999.999.999-99");



    // MODAL RECUPERAR SENHA 
    $('.btn-click').on('click', function(){
      click()
    });

    async function click(){
        const {value: email} = await Swal.fire({
        title: 'Informe seu e-mail para recuperar sua senha',
        type: 'warning',
        input: 'email',
        inputPlaceholder: 'seuemail@dominio.com.br'
      })

      if (email) {
        Swal.fire({
          title:'Senha enviada com sucesso para: ' + email,
          type: 'success',
        })
      }
    };


}); // FIM 

// Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
    var forms = document.getElementsByClassName('needs-validation');
    // Faz um loop neles e evita o envio
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();



// ALERTA PARA MODAL

 /* <button class="btn btn-primary" aria-label="Try me! Example: passing a parameter, you can execute something else for 'Cancel'" onclick="alertaModal('handleDismiss')">
          Try me!
        </button>*/


	 function alertaModal(){
          const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
          },
          buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'No, cancel!',
          reverseButtons: true
        }).then((result) => {
          if (result.value) {
            swalWithBootstrapButtons.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
          ) {
            swalWithBootstrapButtons.fire(
              'Cancelled',
              'Your imaginary file is safe :)',
              'error'
            )
          }
        })
      }; // FIM



       $(window).on("load",function(){
            $(".contentScroll").mCustomScrollbar();
        });



