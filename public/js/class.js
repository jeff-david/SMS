$(document).ready(function(){
    $('#class').DataTable({
        "columnDefs": [
            { "width": "25%", "targets": 2 },
            { "width": "25%", "targets": 3 },
            { "width": "15%", "targets": 4 },
            { "width": "15%", "targets": 0 },
            { "width": "20%", "targets": 0 }
          ]
    });

    $('#view_student').DataTable({
        'language': {
            'emptyTable' : 'No Student in this Section'
        }
    });


    $('#section').DataTable({
        "columnDefs": [
            { "width": "25%", "targets": 2 },
            { "width": "10%", "targets": 3 },
          ]
    });
    $('select[name = "subject1"]').on('change',function(){
        var subjectId = $(this).val();
        if (subjectId) {
            $.ajax({
                url:'/admin/assign_teacher/getTeacher/' + subjectId,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    console.log(data);
                    $('select[name="teacher1"]').empty();
                    $.each(data,function(key,value) {
                        $('select[name="teacher1"]').append('<option value="' + key + '">' + value + '</option>');    
                    });
                }
            });
        }else{
            $('select[name="teacher1"]').empty
        }
    });

    $('select[name = "subject2"]').on('change',function(){
        var subjectId = $(this).val();
        if (subjectId) {
            $.ajax({
                url:'/admin/assign_teacher/getTeacher/' + subjectId,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    console.log(data);
                    $('select[name="teacher2"]').empty();
                    $.each(data,function(key,value) {
                        $('select[name="teacher2"]').append('<option value="' + key + '">' + value + '</option>');    
                    });
                }
            });
        }else{
            $('select[name="teacher2"]').empty
        }
    });
    $('select[name = "subject3"]').on('change',function(){
        var subjectId = $(this).val();
        if (subjectId) {
            $.ajax({
                url:'/admin/assign_teacher/getTeacher/' + subjectId,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    console.log(data);
                    $('select[name="teacher3"]').empty();
                    $.each(data,function(key,value) {
                        $('select[name="teacher3"]').append('<option value="' + key + '">' + value + '</option>');    
                    });
                }
            });
        }else{
            $('select[name="teacher3"]').empty
        }
    });
    $('select[name = "subject4"]').on('change',function(){
        var subjectId = $(this).val();
        if (subjectId) {
            $.ajax({
                url:'/admin/assign_teacher/getTeacher/' + subjectId,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    console.log(data);
                    $('select[name="teacher4"]').empty();
                    $.each(data,function(key,value) {
                        $('select[name="teacher4"]').append('<option value="' + key + '">' + value + '</option>');    
                    });
                }
            });
        }else{
            $('select[name="teacher4"]').empty
        }
    });
    $('select[name = "subject5"]').on('change',function(){
        var subjectId = $(this).val();
        if (subjectId) {
            $.ajax({
                url:'/admin/assign_teacher/getTeacher/' + subjectId,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    console.log(data);
                    $('select[name="teacher5"]').empty();
                    $.each(data,function(key,value) {
                        $('select[name="teacher5"]').append('<option value="' + key + '">' + value + '</option>');    
                    });
                }
            });
        }else{
            $('select[name="teache5r"]').empty
        }
    });
    $('select[name = "subject6"]').on('change',function(){
        var subjectId = $(this).val();
        if (subjectId) {
            $.ajax({
                url:'/admin/assign_teacher/getTeacher/' + subjectId,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    console.log(data);
                    $('select[name="teacher6"]').empty();
                    $.each(data,function(key,value) {
                        $('select[name="teacher6"]').append('<option value="' + key + '">' + value + '</option>');    
                    });
                }
            });
        }else{
            $('select[name="teacher6"]').empty
        }
    });
    $('select[name = "subject7"]').on('change',function(){
        var subjectId = $(this).val();
        if (subjectId) {
            $.ajax({
                url:'/admin/assign_teacher/getTeacher/' + subjectId,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    console.log(data);
                    $('select[name="teacher7"]').empty();
                    $.each(data,function(key,value) {
                        $('select[name="teacher7"]').append('<option value="' + key + '">' + value + '</option>');    
                    });
                }
            });
        }else{
            $('select[name="teacher7"]').empty
        }
    });
    $('select[name = "subject8"]').on('change',function(){
        var subjectId = $(this).val();
        if (subjectId) {
            $.ajax({
                url:'/admin/assign_teacher/getTeacher/' + subjectId,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    console.log(data);
                    $('select[name="teacher8"]').empty();
                    $.each(data,function(key,value) {
                        $('select[name="teacher8"]').append('<option value="' + key + '">' + value + '</option>');    
                    });
                }
            });
        }else{
            $('select[name="teacher8"]').empty
        }
    });
    
}); 

$(document).on('click','.item',function() {
    var class_name = $(this).data('name');
    var id = $(this).data('id');
    $('.modal-body #class_name').val(class_name);
    $('.modal-body #id').val(id);
});


$(document).on('click','.delete',function() {
    var id = $(this).data('id');
    $('.modal-body #id').val(id);
});


$(document).on('click','#add',function() {
    var id = $(this).data('id');
    $('.modal-body #id').val(id);
});

$(document).on('click','.view_student',function() {
    var class_id = $(this).data('class');
    var section_id = $(this).data('section');
    var text = 'No Student in this Section';

    $.ajax({
        type:'GET',
        url: '/admin/view_student/'+class_id+'/'+section_id,
        success:function(data) {

            if (data.length == 0) {
               console.log(data);
            } else {
                $('#view_student').on('draw.dt',function() {
                    $(this).find('.dataTables_empty').parents('tbody').empty();
                }).DataTable();
                var details='';
                i = 0;
                $('.modal-body tbody').empty();
                $.each(data, function (i,item) {
                    details += '<tr>'
                    + '<td>' + (i+1) + '</td>' +
                    '<td>' + item.LRN + '</td>' +
                    '<td>' + item.lastname + '</td>' +
                    '<td>' + item.firstname + '</td>' +
                    '</tr>';
                });
                $('.modal-body tbody').append(details);
                
            }
            
        }
    });

});

$(document).on('click','.editSection',function() {
    var section_name = $(this).data('name');
    var id = $(this).data('id');
    var classes_id = $(this).data('classes');
    $('.modal-body #section_name').val(section_name);
    $('.modal-body #id').val(id);
    $('.modal-body #classes_id').val(classes_id);
});

$(document).on('click','.delete_section',function() {
    var id = $(this).data('section');
    $('.modal-body #id').val(id);
});



