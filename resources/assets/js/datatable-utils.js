function loadDataTable(element){
  $(element).dataTable({
    "bJQueryUI": true,
    "sPaginationType": "full_numbers",
    "oLanguage": {
      "sLengthMenu": "Exibir _MENU_ entradas por página",
      "sZeroRecords": "Nenhum registro encontrado",
      "sInfo": "Mostrando _START_ até _END_ de _TOTAL_ registro(s)",
      "sSearch": "Pesquisar: ",
      "oPaginate": {
        "sFirst": "Início",
        "sPrevious": "Anterior",
        "sNext": "Próximo",
        "sLast": "Último"
      }
    },
    //"aaSorting": [[0, 'asc']]
  });
}

function loadDataTableNoOrdering(element){
  $(element).dataTable({
    "bJQueryUI": true,
    "ordering": false,
    "sPaginationType": "full_numbers",
    "oLanguage": {
      "sLengthMenu": "Exibir _MENU_ entradas por página",
      "sZeroRecords": "Nenhum registro encontrado",
      "sInfo": "Mostrando _START_ até _END_ de _TOTAL_ registro(s)",
      "sSearch": "Pesquisar: ",
      "oPaginate": {
        "sFirst": "Início",
        "sPrevious": "Anterior",
        "sNext": "Próximo",
        "sLast": "Último"
      }
    },
    //"aaSorting": [[0, 'asc']]
  });
}

//Author: Walter Alves
function dataTableDynamic(nameTable, numbers=[], title=null){
  $('#'+nameTable+' tfoot th').each( function () {
    var title = $(this).text();
    $(this).html( '<input type="text" placeholder="Pesquisar '+title+'" />' );
  } );

  // DataTable
  var table = $('#'+nameTable).DataTable({
    colReorder: true,
    "language": {
      "lengthMenu": "Exibir _MENU_ resultados",
      "zeroRecords": "Nenhum registro encontrado",
      "info": "Exibindo de _START_ até _END_ de _TOTAL_ registros",
      "infoEmpty": "Exibindo 0 até 0 de 0 registros",
      "infoFiltered": "(Mostrando _MAX_ total de resultados)",
      "search": "Pesquisar",
      "loadingRecords": "Carregando...",
      "processing": "Processando...",
      "paginate": {
        "next": "Próximo",
        "previous": "Anterior",
        "first": "Primeiro",
        "last": "Último"
      },
      "buttons": {
        "pageLength": {
          _: "Exibir %d resultados",
          '-1': "Todos os Resultados Resultados"
        }
      }
    },
    lengthChange: false,
    lengthMenu: [
      [ 10, 25, 50, -1 ],
      [ '10 resultados', '25 resultados', '50 resultados', 'Exibir todos' ]
    ],columnDefs: [
      {orderable: false, targets:  "no-sort"},
      {"type": "natural", targets: numbers}
      ],
      //"initComplete": function(settings, json) {

      //},
      buttons: [{extend: 'csv', filename: title, className: 'btn-success',exportOptions: {
        columns: ':visible:not(.not-export-col)'
      }} , {extend: 'excel',  filename: title, className: 'btn-success',exportOptions: {
        columns: ':visible:not(.not-export-col)'
      }}, {extend:'pdfHtml5', title: title,

      customize: function(doc) {
        doc.content[1].alignment = 'center';
        doc.content[1].table.widths =
                 Array(doc.content[1].table.body[1].length + 1).join('%').split('');
    },
    filename: title, download:"open", orientation: 'landscape',
                pageSize: 'A4',className: 'btn-danger',exportOptions: {
        columns: ':visible:not(.not-export-col)',stripNewlines: false
      }}, {extend: 'print', text: 'Imprimir', className: 'btn-info', title: title, exportOptions: {
        columns: ':visible:not(.not-export-col)'
      }}, {extend: 'colvis', text: 'Colunas Visiveis', className: 'btn-info'},  {extend: 'pageLength', className: 'btn-info'}],


    });

    table.buttons().container().appendTo( '#'+nameTable+'_wrapper .col-md-6:eq(0)' );

    // Apply the search
    table.columns().every( function () {
      var that = this;

      $(  this.footer() ).on( 'keyup change', function () {
        //$( 'input', this.footer() ).on( 'keyup change', function () {
        if ( that.search() !== this.value ) {
          that
          .search( this.value )
          .draw();
        }
      } );
    } );
  }

  function loadDataTableNoOrderingNoSort(element){
    $(element).dataTable({
      "bJQueryUI": true,
      "ordering": true,
      columnDefs: [
        {
          orderable: false, targets:  "no-sort"}
        ],
        "sPaginationType": "full_numbers",
        "oLanguage": {
          "sLengthMenu": "Exibir _MENU_ entradas por página",
          "sZeroRecords": "Nenhum registro encontrado",
          "sInfo": "Mostrando _START_ até _END_ de _TOTAL_ registro(s)",
          "sSearch": "Pesquisar: ",
          "oPaginate": {
            "sFirst": "Início",
            "sPrevious": "Anterior",
            "sNext": "Próximo",
            "sLast": "Último"
          }
        },
        //"aaSorting": [[0, 'asc']]
      });
    }

    function loadPPAReportDataTable(element){
      $(element).dataTable({
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "columnDefs": [
          { type: 'natural', targets: [2,3,4,5,6] }
        ],
        "oLanguage": {
          "sLengthMenu": "Exibir _MENU_ entradas por página",
          "sZeroRecords": "Nenhum registro encontrado",
          "sInfo": "Mostrando _START_ até _END_ de _TOTAL_ registro(s)",
          "sSearch": "Pesquisar: ",
          "oPaginate": {
            "sFirst": "Início",
            "sPrevious": "Anterior",
            "sNext": "Próximo",
            "sLast": "Último"
          }
        },
        //"aaSorting": [[0, 'asc']]
      });
    }

    function loadRelatorioDespesaDataTable(element){
      $(element).dataTable({
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "columnDefs": [
          { type: 'natural', targets: [3,4] }
        ],
        "oLanguage": {
          "sLengthMenu": "Exibir _MENU_ entradas por página",
          "sZeroRecords": "Nenhum registro encontrado",
          "sInfo": "Mostrando _START_ até _END_ de _TOTAL_ registro(s)",
          "sSearch": "Pesquisar: ",
          "oPaginate": {
            "sFirst": "Início",
            "sPrevious": "Anterior",
            "sNext": "Próximo",
            "sLast": "Último"
          }
        },
        //"aaSorting": [[0, 'asc']]
      });
    }

    function loadDespesaDataTable(element){
      $(element).dataTable({
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "columnDefs": [
          { type: 'natural', targets: [1,2,3,4,5] }
        ],
        "oLanguage": {
          "sLengthMenu": "Exibir _MENU_ entradas por página",
          "sZeroRecords": "Nenhum registro encontrado",
          "sInfo": "Mostrando _START_ até _END_ de _TOTAL_ registro(s)",
          "sSearch": "Pesquisar: ",
          "oPaginate": {
            "sFirst": "Início",
            "sPrevious": "Anterior",
            "sNext": "Próximo",
            "sLast": "Último"
          }
        },
        //"aaSorting": [[0, 'asc']]
      });
    }

    function loadRelatorioReceitaDataTable(element){
      $(element).dataTable({
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "columnDefs": [
          { type: 'natural', targets: [3] }
        ],
        "oLanguage": {
          "sLengthMenu": "Exibir _MENU_ entradas por página",
          "sZeroRecords": "Nenhum registro encontrado",
          "sInfo": "Mostrando _START_ até _END_ de _TOTAL_ registro(s)",
          "sSearch": "Pesquisar: ",
          "oPaginate": {
            "sFirst": "Início",
            "sPrevious": "Anterior",
            "sNext": "Próximo",
            "sLast": "Último"
          }
        },
        //"aaSorting": [[0, 'asc']]
      });
    }

    function loadDataTableLoa(element){
      $(element).dataTable({
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "columnDefs": [
          { type: 'natural', targets: [4] }
        ],
        "oLanguage": {
          "sLengthMenu": "Exibir _MENU_ entradas por página",
          "sZeroRecords": "Nenhum registro encontrado",
          "sInfo": "Mostrando _START_ até _END_ de _TOTAL_ registro(s)",
          "sSearch": "Pesquisar: ",
          "oPaginate": {
            "sFirst": "Início",
            "sPrevious": "Anterior",
            "sNext": "Próximo",
            "sLast": "Último"
          }
        },
        //"aaSorting": [[0, 'asc']]
      });
    }

    function loadDataTablePpa(element){
      $(element).dataTable({
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "columnDefs": [
          { type: 'natural', targets: [4] }
        ],
        "language": {
          "decimal": ",",
          "thousands": "."
        },
        "oLanguage": {
          "sLengthMenu": "Exibir _MENU_ entradas por página",
          "sZeroRecords": "Nenhum registro encontrado",
          "sInfo": "Mostrando _START_ até _END_ de _TOTAL_ registro(s)",
          "sSearch": "Pesquisar: ",
          "oPaginate": {
            "sFirst": "Início",
            "sPrevious": "Anterior",
            "sNext": "Próximo",
            "sLast": "Último"
          }
        },
        //"aaSorting": [[0, 'asc']]
      });
    }





    function drawDataTable(element){
      $(element).DataTable().draw();
    }

    function reloadDataTable(element){
      $(element).DataTable().destroy();
      $(element).dataTable({
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "oLanguage": {
          "sLengthMenu": "Exibir _MENU_ entradas por página",
          "sZeroRecords": "Nenhum registro encontrado",
          "sInfo": "Mostrando _START_ até _END_ de _TOTAL_ registro(s)",
          "sSearch": "Pesquisar: ",
          "oPaginate": {
            "sFirst": "Início",
            "sPrevious": "Anterior",
            "sNext": "Próximo",
            "sLast": "Último"
          }
        },
        //"aaSorting": [[0, 'asc']]
      });
    }
