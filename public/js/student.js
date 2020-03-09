
$(document).ready(function(){

    $('#table').DataTable();
    $('#student').DataTable({
        "columnDefs": [
            { "width": "10%", "targets": 4 }
          ]
    });
    
});

$(document).on("click", ".send_item", function () {
    var lrn = $(this).data('id');
    $(".modal-body #LRN").val(lrn);
});

$(document).on("click", ".sendannounce", function () {
    var lrn = $(this).data('id');
    var type = $(this).data('type');
    $(".modal-body #LRN").val(lrn);
    $(".modal-body #type_id").val(type);
});

$(document).on("click", ".delete", function () {
    var id = $(this).data('id');
    $(".modal-body #student").val(id);
});



$( function() {
    $( "#register_date" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange:'1997:2030'
    });

    $( "#birthday" ).datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange:'1997:2030'
      });
});


$(document).ready(function(){
    $('#image-photo').change(function() {
        readURL(this);
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function(e) {
                console.log(e);
                $('#img').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
});


$(document).ready(function() {
    $('#birthday').on('change',function() {
        var date = $(this).val();
        var dob = new Date(date);
        var  today = new Date();
        var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
        console.log(age);
        if (age < 12) {
            alert('Age must not be less than 12 years old and below')
            $(this).val('');
        }else if(age > 20){
            alert('Age must not be less than 20 years old and above')
            $(this).val('');
        }
        else{
            $('#age').val(age).attr('readonly',true);
        }
    });
}); 


$(document).on('click','.view_grade',function() {
    var id = $(this).data('id');
    var class_id = $(this).data('class');

    $.ajax({
        type:'GET',
        url: '/admin/view_grade/'+id+'/'+class_id,
        success:function(data) {
            console.log(data);
            if (data.length == 0) {
               console.log(data);
            } else {
                $('#view_grade').on('draw.dt',function() {
                    $(this).find('.dataTables_empty').parents('tbody').empty();
                }).DataTable();
                var details='';
                i = 0;
                $('.modal-body tbody').empty();
                $.each(data, function (i,item) {
                    details += '<tr>'
                    + '<td>' + item.subject_name + '</td>' +
                    '<td contenteditable="true" class="editGrade" data-id="1" data-subject="'+ item.subject_id +'" data-user="'+ item.user_id +'" data-class="'+ item.class_id+ '">' + item.first_grading + '</td>' +
                    '<td contenteditable="true" class="editGrade" data-id="2" data-subject="'+ item.subject_id +'" data-user="'+ item.user_id +'" data-class="'+ item.class_id+ '">' + item.second_grading + '</td>' +
                    '<td contenteditable="true" class="editGrade" data-id="3" data-subject="'+ item.subject_id +'" data-user="'+ item.user_id +'" data-class="'+ item.class_id+ '">' + item.third_grading + '</td>' +
                    '<td contenteditable="true" class="editGrade" data-id="4" data-subject="'+ item.subject_id +'" data-user="'+ item.user_id +'" data-class="'+ item.class_id+ '">' + item.fourth_grading + '</td>' +
                    '</tr>';
                });
                $('.modal-body tbody').append(details);
                
            }
            
        }
    }).fail(function(err){
        console.log(err);
    });

});

$(document).on('focusout','.editGrade',function() {
       var user_id = $(this).data('user');
       var class_id = $(this).data('class');
       var subject_id = $(this).data('subject');
       var value = $(this).text();
       var id = $(this).data('id');

       $.ajax({
        type:'POST',
        url: '/admin/edit_grade/',
        data:{"_token": $('meta[name="csrf-token"]').attr('content'),"value":value, "user":user_id,"class":class_id,"subject":subject_id,"id":id},
        success:function(data) {
            console.log(data);
        }
    }).fail(function(err){
        console.log(err);
    });
});
