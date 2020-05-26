$(document).ready(function() {
    $('#department').DataTable({});

    var form = $('#departForm');

    form.submit(function(e) {
       e.preventDefault();
       
       $.ajax({
            url: form.attr('action'),
            type:'POST',
            data: form.serialize(),
            dataType: 'json'
       }).done(function(response) {
           if (response) {
               swal({
                   title: "Message",
                   text:  "Successfully Registered a Department",
                   buttons:false,
                   icon:"success"
               }).then(function(){
                    window.location.reload();
               },function() {
                   window.location.reload();
               });
           }else{
                swal("Oops!", "Registering Department error!", 'error');
           }
       }).fail(function() {
            swal("Fail!", "Network/Server error!", 'error');
            window.location.reload();
       });
    });


    $(document).on('click','.editDepart',function() {
        var class_name = $(this).data('name');
        var id = $(this).data('id');
        var description = $(this).data('description');
        $('.modal-body #department_name').val(class_name);
        $('.modal-body #id').val(id);
        $('.modal-body #description').val(description);
    });
});

$(document).ready(function() {

    var form = $('#editForm');

    form.submit(function(e) {
       e.preventDefault();
       
       $.ajax({
            url: form.attr('action'),
            type:'POST',
            data: form.serialize(),
            dataType: 'json'
       }).done(function(response) {
           if (response) {
               swal({
                   title: "Successfully Updated",
                   text:  "",
                   icon:"success"
               }).then(function(){
                    window.location.reload();
               },function() {
                   window.location.reload();
               });
           }else{
                swal("Oops!", "Error in Updating!", 'error');
           }
       }).fail(function() {
            swal("Fail!", "Network/Server error!", 'error');
            window.location.reload();
       });
    });
});

$(document).ready(function() {
    $('.deleteDepart').on('click',function() {
       var id = $(this).data('id');
       swal({
         title: "Are you sure?",
         text: "You will not be able to recover this departments!",
         icon: "error",
         dangerMode: true,
         buttons: true,
         buttons: ['Cancel','Delete!']
       }).then((willDelete) => {
           if (willDelete) {
             $.ajax({
                 url: '/admin/department/delete',
                 type: 'POST',
                 dataType: 'json',
                 data:{"_token": $('meta[name="csrf-token"]').attr('content'), 'id': id},
                 success:function() {
                    swal({
                        title: "Done!",
                        text:  "Successfully Deleted",
                        icon:"success"
                    }).then(function(){
                        window.location.reload();
                   },function() {
                       window.location.reload();
                   });
                 },
                 error: function(xhr, ajaxOptions, thrownError) {
                   swal("Error!","Please try again","error");
                 }
             });
           }
       });
    });
 });






