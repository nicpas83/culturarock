$(document).ready(function () {

// For select 2
    $(".select2").select2();
    
    $('#procesosIndex').DataTable({
        "aaSorting": [],
        "ordering": false,
        "columns": [
            null,
            null,
            {"width": "35%"},
            {"width": "15%"},
        ]
    });

});

