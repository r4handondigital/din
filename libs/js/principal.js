$(document).ready(function(){


    $("#cpf").mask("999.999.999-99");


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



(function() {
  // Multi-Level Accordion Menu 
  var accordionsMenu = document.getElementsByClassName('cd-accordion--animated');

  if( accordionsMenu.length > 0 && window.requestAnimationFrame) {
    for(var i = 0; i < accordionsMenu.length; i++) {(function(i){
      accordionsMenu[i].addEventListener('change', function(event){
        animateAccordion(event.target);
      });
    })(i);}

    function animateAccordion(input) {
      var bool = input.checked,
        dropdown =  input.parentNode.getElementsByClassName('cd-accordion__sub')[0];
      
      Util.addClass(dropdown, 'cd-accordion__sub--is-visible'); // make sure subnav is visible while animating height

      var initHeight = !bool ? dropdown.offsetHeight: 0,
        finalHeight = !bool ? 0 : dropdown.offsetHeight;

      Util.setHeight(initHeight, finalHeight, dropdown, 200, function(){
        Util.removeClass(dropdown, 'cd-accordion__sub--is-visible');
        dropdown.removeAttribute('style');
      });
    }
  }
}());

