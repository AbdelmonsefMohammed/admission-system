
// Tables-DataTables.js
// ====================================================================
// This file should not be included in your project.
// This is just a sample how to initialize plugins or components.
//
// - ThemeOn.net -



$(document).on('nifty.ready', function() {


    // DATA TABLES
    // =================================================================
    // Require Data Tables
    // -----------------------------------------------------------------
    // http://www.datatables.net/
    // =================================================================

    $.fn.DataTable.ext.pager.numbers_length = 5;


    // Basic Data Tables with responsive plugin
    // -----------------------------------------------------------------
    $('#demo-dt-basic').dataTable( {
        "responsive": true,
        "language": {
            "paginate": {
              "previous": '<i class="demo-psi-arrow-left"></i>',
              "next": '<i class="demo-psi-arrow-right"></i>'
            }
        },
        "displayLength": 6,
    } );





    // Row selection (single row)
    // -----------------------------------------------------------------
    var rowSelection = $('#demo-dt-selection').DataTable({
        "responsive": true,
        "language": {
            "paginate": {
              "previous": '<i class="demo-psi-arrow-left"></i>',
              "next": '<i class="demo-psi-arrow-right"></i>'
            }
        }
    });

    $('#demo-dt-selection').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            rowSelection.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );




    var groupColumn = 1;
    // Row selection and deletion (multiple rows)
    // -----------------------------------------------------------------
    var rowDeletion = $('#demo-dt-delete').DataTable({
        "responsive": true,
        "language": {
            "paginate": {
              "previous": '<i class="demo-psi-arrow-left"></i>',
              "next": '<i class="demo-psi-arrow-right"></i>'
            }
        },
        "dom": '<"toolbar">Bfrtip',
        /*"columnDefs": [
            { "visible": false, "targets": groupColumn }
        ],
        "order": [[ groupColumn, 'asc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;

            api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                    );

                    last = group;
                }
            } );
        },*/
        "displayLength": 10,
        /*"iDisplayLength": -1,
        "aaSorting": [[ 1, "asc" ]], // Sort by first column descending*/
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },

            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'csvHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'colvis',
                collectionLayout: 'fixed two-column'
            },
            'pageLength'
        ],
        lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
        select: 'multi',
        initComplete: function () {
            var btns = $('.dt-button');
            btns.addClass('btn btn-default btn-sm');
            btns.removeClass('dt-button');

            $('#selection').on( 'change',  function () {
                if ($('#selection').is(':checked')) {
                    alert('sad');
                }
                //alert(rowDeletion.rows('.selected').data().toArray());
            });

        },


    });

    /*// Order by the grouping
    $('#demo-dt-delete tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === groupColumn && currentOrder[1] === 'asc' ) {
            table.order( [ groupColumn, 'desc' ] ).draw();
        }
        else {
            table.order( [ groupColumn, 'asc' ] ).draw();
        }
    } );
*/

    $('#demo-custom-toolbar').appendTo($("div.toolbar"));





    $('#demo-dt-delete tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
        //alert(rowDeletion.rows('.selected').data().toArray());
    });

   /* $('.dt-edit').each(function () {
        $(this).on('click', function(evt){
            $this = $(this);
            var dtRow = $this.parents('tr');
            $('div.modal-body').innerHTML='';
            $('div.modal-body').append('Row index: '+dtRow[0].rowIndex+'<br/>');
            $('div.modal-body').append('Number of columns: '+dtRow[0].cells.length+'<br/>');
            for(var i=0; i < dtRow[0].cells.length; i++){
                $('div.modal-body').append('Cell (column, row) '+dtRow[0].cells[i]._DT_CellIndex.column+', '+dtRow[0].cells[i]._DT_CellIndex.row+' => innerHTML : '+dtRow[0].cells[i].innerHTML+'<br/>');
            }
            $('#myModal').modal('show');
        });
    });*/

    $('#demo-dt-delete-btn').click( function () {
        alert(rowDeletion.rows('.selected').data());
        rowDeletion.rows('.selected').remove().draw( false );
    });
    var events = $('#events');
    rowDeletion
        .on( 'select', function ( e, dt, type, indexes ) {
            var rowData = table.rows( indexes ).data().toArray();
            events.prepend( '<div><b>'+type+' selection</b> - '+JSON.stringify( rowData )+'</div>' );
            alert('hi');
        } )
        .on( 'deselect', function ( e, dt, type, indexes ) {
            var rowData = table.rows( indexes ).data().toArray();
            events.prepend( '<div><b>'+type+' <i>de</i>selection</b> - '+JSON.stringify( rowData )+'</div>' );
        } );






    // Add Row
    // -----------------------------------------------------------------
    var t = $('#demo-dt-addrow').DataTable({
        "responsive": true,
        "language": {
            "paginate": {
              "previous": '<i class="demo-psi-arrow-left"></i>',
              "next": '<i class="demo-psi-arrow-right"></i>'
            }
        },
        "dom": '<"newtoolbar">frtip'
    });
    $('#demo-custom-toolbar2').appendTo($("div.newtoolbar"));

    var randomInt = function(min,max){
        return Math.floor(Math.random()*(max-min+1)+min);
    }
    $('#demo-dt-addrow-btn').on( 'click', function () {
        t.row.add( [
            'Adam Doe',
            'New Row',
            'New Row',
            randomInt(1,100),
            '2015/10/15',
            '$' + randomInt(1,100) +',000'
        ] ).draw();
    } );


});
