@@ -1,32 +1,131 @@
$(document).ready(function(){
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

  var table = $('#example').DataTable({ 
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
        fixedColumns:   {
            leftColumns: 2
        },    
      'columnDefs': [
         {
            'targets': 0,
            'checkboxes': {
               'selectRow': true
            }
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
      ],
      'select': {
         'style': 'multi'
      },
      'order': [[1, 'asc']]
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
      
      var rows_selected = table.column(0).checkboxes.selected();

      // Iterate over all selected checkboxes
      $.each(rows_selected, function(index, rowId){
@ -39,41 +138,34 @@ $(document).ready(function(){
         );
      });

      // FOR DEMONSTRATION ONLY
      // The code below is not needed in production
      
      // Output form data to a console     
      $('#example-console-rows').text(rows_selected.join(","));
      // FOR DEMONSTRATION ONLY     
      
      // Output form data to a console     
      $('#example-console-form').text($(form).serialize());
      $('#example-console').text($(form).serialize());
      console.log("Form submission", $(form).serialize());
       
      // Remove added elements
      $('input[name="id\[\]"]', form).remove();
       
      // Prevent actual form submission
      e.preventDefault();
   });   
   });

   // ATIVAR BOTÃO FORMULARIO

    $('.selec_geral,.itens_relatorios').change(function() {
        if ($('input:checkbox:checked').length > 2){

            document.getElementById("VincularForm").disabled = false;
            document.getElementById("ExcluirForm").disabled = false;
        }
        else {
            document.getElementById("VincularForm").disabled = true;
            document.getElementById("ExcluirForm").disabled = true;
        }        
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
@ -149,7 +241,7 @@ function closeNav() {

// ALERTA PARA MODAL

 /* <button class="btn btn-primary" aria-label="Try me! Example: passing a parameter, you can execute something else for 'Cancel'" onclick="alertaModal('handleDismiss')">
 /* <button class="btn btn-primary"  >
          Try me!
        </button>*/

@ -164,18 +256,19 @@ function closeNav() {
        })

        swalWithBootstrapButtons.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          title: 'Tem certeza que deseja excluir?',
          text: "Você não poderá reverter isso!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'No, cancel!',
          cancelButtonText: 'NÃO',
          confirmButtonText: 'SIM',
          
          reverseButtons: true
        }).then((result) => {
          if (result.value) {
            swalWithBootstrapButtons.fire(
              'Deleted!',
              'Your file has been deleted.',
              'Deletado!',
              'Seu arquivo(s) foi deletado.',
              'success'
            )
          } else if (
@ -183,8 +276,8 @@ function closeNav() {
            result.dismiss === Swal.DismissReason.cancel
          ) {
            swalWithBootstrapButtons.fire(
              'Cancelled',
              'Your imaginary file is safe :)',
              'Cancelado',
              'Seu arquivo está seguro.',
              'error'
            )
          }