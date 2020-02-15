
$(document).ready(function(){

    $('#table').DataTable();
    $('#student').DataTable({
        "columnDefs": [
            { "width": "15%", "targets": 3 }
          ]
    });
    
    $(document).on("click", ".send_item", function () {
        var lrn = $(this).data('id');
        $(".modal-body #LRN").val(lrn);
   });
});