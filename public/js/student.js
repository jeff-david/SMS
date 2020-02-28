
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
                    '<td>' +  item.first_grading + '</td>' +
                    '<td>' + item.second_grading + '</td>' +
                    '<td>' + item.third_grading + '</td>' +
                    '<td>' + item.fourth_grading + '</td>' +
                    '</tr>';
                });
                $('.modal-body tbody').append(details);
                
            }
            
        }
    }).fail(function(err){
        console.log(err);
    });

});
