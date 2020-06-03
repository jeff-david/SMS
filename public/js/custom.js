function createUsername() {
    var firstname = $('input[name=firstname]').val().split(' ');
    if (firstname.length == 3) {
        var first = firstname[0];
        var second = firstname[1];
        var f = first.substring(0,1).toLowerCase();
        var lname = $('input[name=lastname]').val().toLowerCase();
        var s = second.substring(0,1).toLowerCase();
        var date = $('input[name=birthday]').val().split('/');
        var bday = date[2].toString();
        var username = f + s + lname;
        var password = f + s + lname + bday;
        $('input[name = username]').val(username);
        $('input[name = password]').val(password);
    }else{
        var fname = $('input[name=firstname]').val().substring(0,1).toLowerCase();  
        var lname = $('input[name=lastname]').val().toLowerCase();
        var username = fname + lname ;
   
        $('input[name = username]').val(username);
   
    }
}

// function createPassword() {
//     var firstname = $('input[name=firstname]').val().split(' ');
//     var age = $('#age').val();
//     if (firstname.length == 3) {
//         var first = firstname[0];
//         var second = firstname[1];
//         var f = first.substring(0,1).toLowerCase();
//         var lname = $('input[name=lastname]').val().toLowerCase();
//         var s = second.substring(0,1).toLowerCase();
//         var password = f + s + lname + age;
//         $('input[name = password]').val(password);
//     }else{
//         var fname = $('input[name=firstname]').val().substring(0,1).toLowerCase();  
//         var lname = $('input[name=lastname]').val().toLowerCase();
//         var password = fname + lname + age;
   
//         $('input[name = password]').val(password);
   
//     }
// }


$('input[name = firstname]').on('keyup',createUsername);
$('input[name = lastname]').on('keyup',createUsername);
// $('input[name = birthday]').on('change',createPassword);


var lrn = 1 + Math.floor(Math.random() * 5000);

$(document).ready(function() {
    var number = 1 + Math.floor(Math.random() * 5000);
    var pattern = '0000000';
    var lrn = (pattern + number).slice(-7) ;
    $('#lrn').val(lrn);
    console.log($('#file').val());
}); 

$(document).ready(function() {
    var form = $('#subjectForm');

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
                   title: "Successfully Registered a Subject",
                   text:  "",
                   icon:"success"
               }).then(function(){
                    window.location.reload();
               },function() {
                   window.location.reload();
               });
           }else{
                swal("Oops!", "Registering Subject error!", 'error');
           }
       }).fail(function() {
            swal("Fail!", "Network/Server error!", 'error');
            // window.location.reload();
       });
    });

});

$(document).ready(function() {
    var form = $('#subjectsetForm');

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
                   title: "Successfully Registered a Subject",
                   text:  "",
                   icon:"success"
               }).then(function(){
                    window.location.reload();
               },function() {
                   window.location.reload();
               });
           }else{
                swal("Oops!", "Registering Subject error!", 'error');
           }
       }).fail(function() {
            swal("Fail!", "Network/Server error!", 'error');
            window.location.reload();
       });
    });
  
});
$(document).on('click','.subject_edit',function() {
    var subject_name = $(this).data('name');
    var id = $(this).data('id');
    var description = $(this).data('description');
    var year = $(this).data('year');
    var depart = $(this).data('department');
    $('.modal-body #subject_name').val(subject_name);
    $('.modal-body #id').val(id);
    $('.modal-body #description').val(description);
    $('.modal-body #edityear option[value='+ year +']').attr('selected','selected');
    $('.modal-body #editdepartment option[value='+ depart +']').attr('selected','selected');
  
});

$(document).ready(function() {

    var form = $('#editSubjectForm');
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

$(document).on('click','.subjectset_edit',function() {
    var subject_name = $(this).data('name');
    var id = $(this).data('id');
    var description = $(this).data('description');
    var year = $(this).data('year');
    var depart = $(this).data('department');
    var semester = $(this).data('semester')
    $('.modal-body #add_subject').val(subject_name);
    $('.modal-body #id').val(id);
    $('.modal-body #description').val(description);
    $('.modal-body #edityear option[value='+ year +']').attr('selected','selected');
    $('.modal-body #editdepartment option[value='+ depart +']').attr('selected','selected');
    $('.modal-body #editsemester option[value='+ semester +']').attr('selected','selected');
  
});

$(document).ready(function() {

    var form = $('#editSubjectsetForm');
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
    
    // delete
    $(document).ready(function() {
        $('.deleteSubject').on('click',function() {
            // get value from the data attribute
           var id = $(this).data('id');
           var level = $(this).data('level');
           swal({
             title: "Are you sure?",
             text: "You will not be able to recover this subjects!",
             icon: "error",
             dangerMode: true,
             buttons: true,
             buttons: ['Cancel','Delete!']
           }).then((willDelete) => {
               if (willDelete) {
                 $.ajax({
                    // pass to controller
                    //use this to call the routing to controller
                     url: '/admin/subject/delete',
                     type: 'POST',
                     dataType: 'json',
                     //data to pass in controller
                    //  data:{"_token": $('meta[name="csrf-token"]').attr('content'), 'id': id,'level':level},
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
});
