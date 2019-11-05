//
// Updates "Select all" control in a data table
//
function updateDataTableSelectAllCtrl(table){
   var $table             = table.table().node();
   var $chkbox_all        = $('tbody input[type="checkbox"]', $table);
   var $chkbox_checked    = $('tbody input[type="checkbox"]:checked', $table);
   var chkbox_select_all  = $('thead input[name="select_all"]', $table).get(0);

   // If none of the checkboxes are checked
   if($chkbox_checked.length === 0){
      chkbox_select_all.checked = false;
      if('indeterminate' in chkbox_select_all){
         chkbox_select_all.indeterminate = false;
      }

   // If all of the checkboxes are checked
   } else if ($chkbox_checked.length === $chkbox_all.length){
      chkbox_select_all.checked = true;
      if('indeterminate' in chkbox_select_all){
         chkbox_select_all.indeterminate = false;
      }

   // If some of the checkboxes are checked
   } else {
      chkbox_select_all.checked = true;
      if('indeterminate' in chkbox_select_all){
         chkbox_select_all.indeterminate = true;
      }
   }
}

$(document).ready(function(){



// Array holding selected row IDs
   var rows_selected = [];
   var table = $('#example').DataTable({
        scrollY:        300,
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        language: {
          search: '_INPUT_',
          searchPlaceholder: 'Pesquisa rápida'
        },   
      'columnDefs': [{
         'targets': 0,
         'searchable':false,
         'orderable':false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
             return '<input type="checkbox" name="relatorios" class="itens_relatorios">';
         }
     
      }],
      'order': [1, 'asc'],
      'rowCallback': function(row, data, dataIndex){
         // Get row ID
         var rowId = data[0];

         // If row ID is in the list of selected row IDs
         if($.inArray(rowId, rows_selected) !== -1){
            $(row).find('input[type="checkbox"]').prop('checked', true);
            $(row).addClass('selected');
         }
      }
   });
   
   // Handle click on checkbox
   $('#example tbody').on('click', 'input[type="checkbox"]', function(e){
      var $row = $(this).closest('tr');

      // Get row data
      var data = table.row($row).data();

      // Get row ID
      var rowId = data[0];

      // Determine whether row ID is in the list of selected row IDs 
      var index = $.inArray(rowId, rows_selected);

      // If checkbox is checked and row ID is not in list of selected row IDs
      if(this.checked && index === -1){
         rows_selected.push(rowId);

      // Otherwise, if checkbox is not checked and row ID is in list of selected row IDs
      } else if (!this.checked && index !== -1){
         rows_selected.splice(index, 1);
      }

      if(this.checked){
         $row.addClass('selected');
      } else {
         $row.removeClass('selected');
      }

      // Update state of "Select all" control
      updateDataTableSelectAllCtrl(table);

      // Prevent click event from propagating to parent
      e.stopPropagation();
   });

   // Handle click on table cells with checkboxes
   $('#example').on('click', 'tbody td, thead th:first-child', function(e){
      $(this).parent().find('input[type="checkbox"]').trigger('click');
   });
   

   // Handle click on "Select all" control
   $('thead input[name="select_all"]', table.table().container()).on('click', function(e){
      if(this.checked){
         $('tbody input[type="checkbox"]:not(:checked)', table.table().container()).trigger('click');
      } else {
         $('tbody input[type="checkbox"]:checked', table.table().container()).trigger('click');
      }

      // Prevent click event from propagating to parent
      e.stopPropagation();
   });

   // Handle table draw event
   table.on('draw', function(){
      // Update state of "Select all" control
      updateDataTableSelectAllCtrl(table);
   });
    
   // Handle form submission event 
   $('#frm-example').on('submit', function(e){
      var form = this;
      
    
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
     
      // FOR DEMONSTRATION ONLY     
      
      // Output form data to a console     
     
      $('#example-console').text($(form).serialize());
      console.log("Form submission", $(form).serialize());
       
      // Remove added elements
      $('input[name="id\[\]"]', form).remove();
       
      // Prevent actual form submission
      e.preventDefault();
  
   });

   // ATIVAR BOTÃO FORMULARIO

    $('.selec_geral,.itens_relatorios').change(function() {
        if ($('input:checkbox:checked').length > 2){

            document.getElementById("EditarForm").disabled = false;
            document.getElementById("ExcluirForm").disabled = false;
        }
        else {
            document.getElementById("EditarForm").disabled = true;
            document.getElementById("ExcluirForm").disabled = true;
        }        
    });

/*$.validator.setDefaults( {
      submitHandler: function () {
        alert( "submitted!" );
      }
    } );*/
    // VALIDAÇÃO DE FORMULÁRIO
    /*$( "#FormCadastro" ).validate( {
        rules: {
          nome: "required",
          situacao: "required",
          ordem: "required",
                  
        },
        messages: {
          nome: "Informe a descrição da dimensão",
          situacao: "Informe a situação da dimensão",
          ordem: "Obrigatório"
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

  */



    // EVENTOS SIMPLES
    $( ".mn_sub" ).click(function() {
      $( this ).toggleClass( "setnav" );
    });

    $( ".mn_sb_sb" ).click(function() {
      $( this ).toggleClass( "atv" );
    });

    /*$( "#btx" ).click(function() {
      $( "tr" ).removeClass( "selected" );
      $("#alerta-confirmacao").addClass('ativo-alert');
      $(".selec_geral,.itens_relatorios").each(function () {
                    this.checked = false;
                });
    });*/

    /*$( "#salvar_form" ).click(function() {
       $("#alerta-confirmacao").addClass('ativo-alert');
    });*/

     $.validator.setDefaults( {
      submitHandler: function () {
        $("#alerta-confirmacao").addClass('ativo-alert');
      }
    } );      // VALIDAÇÃO DE FORMULÁRIO
    $( "#FormCadastro" ).validate( {
        rules: {
          nome: "required",
          datainicio: "required",
          datafinal: "required",
          situacao: "required",
          ordem: "required",
                  
        },
        messages: {
          nome: "Informe a descrição da dimensão",
          situacao: "Informe a situação da dimensão",
          ordem: "Obrigatório",
          datainicio: "Obrigatório",
          datafinal: "Obrigatório"
         
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

   $('[data-toggle="tooltip"]').tooltip();



    // FORMULARIO
    $("#cpf").mask("999.999.999-99");

    $("#telefone").mask("(99) 9999.9999");

    $("#celular").mask("(99) 9.9999.9999");

    $("#cep").mask("99999-999");


    // ADCIONAR MAIS ARQUIVOS VIA UPLOAD
     var campos_max          = 10;   //max de 10 campos
        var x = 1; // campos iniciais
        $('#add_field').click (function(e) {
                e.preventDefault();     //prevenir novos clicks
                if (x < campos_max) {
                        $('#listas').append('<div class="box-input">\
                                <input type="file" class="form-control-file" name="arquivos[]" >\
                                <a href="#" class="remover_campo"><i class="fa fa-trash"></i></a>\
                                </div>');
                        x++;
                }
        });

        // Remover o div anterior
        $('#listas').on("click",".remover_campo",function(e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
        });


    // ENVIADO COM SUCESSO
    
   /* $('#envio_sucesso').on('click', function(){
        Swal.fire({
          title: 'Sucesso!',
          text: 'Seu cadastro foi atualizado.',
          type: 'success',
          confirmButtonText: 'Fechar'
        })
    });*/

   

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

     $('.datepicker').datepicker({ 
        uiLibrary: 'bootstrap4',
        format: 'dd/mm/yyyy',
        iconsLibrary: 'fontawesome',
        header: true,
        footer: true, 
        modal: true 
      });

}); // FIM 


// MENU MOBILE
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
          title: 'Tem certeza que deseja excluir?',
          text: "Você não poderá reverter isso!",
          type: 'warning',
          showCancelButton: true,
           cancelButtonText: 'NÃO',
          confirmButtonText: 'SIM',
          reverseButtons: true
        }).then((result) => {
          if (result.value) {
              $( "tr" ).removeClass( "selected" );
              $("#alerta-confirmacao").addClass('ativo-alert');
              $(".selec_geral,.itens_relatorios").each(function () {
                    this.checked = false;
                });
          } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
          ) {
            swalWithBootstrapButtons.fire(
              'Cancelado',
              'Seu arquivo está seguro.',
              'error'
            )
          }
        })
      }; // FIM

// CONSULTAR CEP
 function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };


// BARRA DE ROLAGEM
       $(window).on("load",function(){
            $(".contentScroll").mCustomScrollbar();
        });
