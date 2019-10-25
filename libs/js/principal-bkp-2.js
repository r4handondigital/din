$(document).ready(function(){

  var table = $('#example').DataTable({ 
        scrollY:        300,
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        fixedColumns:   {
            leftColumns: 2
        },    
      'columnDefs': [
         {
            'targets': 0,
            'checkboxes': {
               'selectRow': true
            }
         }
      ],
      'select': {
         'style': 'multi'
      },
      'order': [[1, 'asc']]
   });
   
   // Handle form submission event 
   $('#frm-example').on('submit', function(e){
      var form = this;
      
      var rows_selected = table.column(0).checkboxes.selected();

      // Iterate over all selected checkboxes
      $.each(rows_selected, function(index, rowId){
         // Create a hidden element 
         $(form).append(
             $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'id[]')
                .val(rowId)
         );
      });

      // FOR DEMONSTRATION ONLY
      // The code below is not needed in production
      
      // Output form data to a console     
      $('#example-console-rows').text(rows_selected.join(","));
      
      // Output form data to a console     
      $('#example-console-form').text($(form).serialize());
       
      // Remove added elements
      $('input[name="id\[\]"]', form).remove();
       
      // Prevent actual form submission
      e.preventDefault();
   });   

    /*$('#example').DataTable( {
        scrollY:        300,
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
        fixedColumns:   {
            leftColumns: 2
        },
        columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]]
    } );*/


    $( ".mn_sub" ).click(function() {
      $( this ).toggleClass( "setnav" );
    });

    $( ".mn_sb_sb" ).click(function() {
      $( this ).toggleClass( "atv" );
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

function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
  $(".sidenav").addClass( "atv" );
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  $(".sidenav").toggleClass( "atv" );
}


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







