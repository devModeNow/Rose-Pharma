$(document).ready(function() {
    var table = $('[data-table]').DataTable({
      "columns": [
        null,
        null,
        null,
        null,
        null,
        { "orderable": true }
      ]
    });

    /* $('.form-control-search').keyup(function(){
      table.search($(this).val()).draw() ;
    }); */
  });