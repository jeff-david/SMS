
$(document).ready(function(){

    $('#table').DataTable();
    $('#student').DataTable({
        "columnDefs": [
            { "width": "15%", "targets": 3 }
          ]
    });
    
});