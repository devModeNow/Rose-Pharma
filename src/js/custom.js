$(document).ready(function() {
    var table = $('[data-table]').DataTable({
      "columns": [
        null,
        null,
        null,
        null,
        null,
        { "orderable": false }
      ]
    });

    /* $('.form-control-search').keyup(function(){
      table.search($(this).val()).draw() ;
    }); */
  });