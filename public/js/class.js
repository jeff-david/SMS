$(document).ready(function(){
    $('#class').DataTable({
        "columnDefs": [
            { "width": "20%", "targets": 2 },
            { "width": "20%", "targets": 3 },
            { "width": "10%", "targets": 6  },
            { "width": "15%", "targets": 0 },
            { "width": "20%", "targets": 0 }
          ]
    });

    $('#exam').DataTable({});

    var year = (new Date()).getFullYear();
    $('#class_from').val(year);
    $('#class_to').val( year + 5);

    $('#view_student').DataTable({
        'language': {
            'emptyTable' : 'No Student in this Section'
        },
        'searching':false,
        'lengthChange':false,
        'ordering':false,
        'info':false,
        'paging':false,
    });


    $('#section').DataTable({
        "columnDefs": [
            { "width": "20%", "targets": 3 },
            { "width": "20%", "targets": 4 },
            { "width": "10%", "targets": 5 },
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
                    $('select[name="teacher1"]').empty();
                    $.each(data,function(key,value) {
                        $('select[name="teacher1"]').append('<option value="' + key + '">' + value + '</option>');    
                    });
                }
            });
        }else{
            $('select[name="teacher1"]').empty();
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
            $('select[name="teacher2"]').empty();
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
            $('select[name="teacher3"]').empty();
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
            $('select[name="teacher4"]').empty();
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
            $('select[name="teache5r"]').empty();
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
            $('select[name="teacher7"]').empty();
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
            $('select[name="teacher8"]').empty();
        }
    });
    
}); 

$(document).on('click','.item',function() {
    var class_name = $(this).data('name');
    var id = $(this).data('id');
    var description = $(this).data('description');
    var from = $(this).data('from');
    var to = $(this).data('to');
    $('.modal-body #class_name').val(class_name);
    $('.modal-body #id').val(id);
    $('.modal-body #description').val(description);
    $('.modal-body #class_from').val(from);
    $('.modal-body #class_to').val(to);
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
    var year_level_id = $(this).data('level');
    var text = 'No Student in this Section';

    $.ajax({
        type:'GET',
        url: '/admin/view_student/'+class_id+'/'+section_id+'/'+year_level_id,
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
                    '<td> <button class="btn btn-primary btn-block"> View Details </button> </td>' +
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
    var description = $(this).data('description');
    var from = $(this).data('from');
    var to = $(this).data('to');
    $('.modal-body #description').val(description);
    $('.modal-body #section_name').val(section_name);
    $('.modal-body #id').val(id);
    $('.modal-body #classes_id').val(classes_id);
    $('.modal-body #section_from').val(from);
    $('.modal-body #section_to').val(to);
});

$(document).on('click','.delete_section',function() {
    var id = $(this).data('section');
    $('.modal-body #id').val(id);
});

$(document).ready(function() {
    var backups = {};
    $('select[id^=schedule]').on('change',function() {
        var v = $(this).val();
        var f = false;
        $('select[id^=schedule]').not(this).each(function() {
            if ($(this).val() == v) {
                f = true;
                return
            }
        });

        if (f) {
            $(this).val(backups[$(this).attr('id')]);
            alert('Time Duplicated!');
        }else{
            backups[$(this).attr('id') = v];
        }
    }).val(null);
});


$(document).ready(function() {
    var backups = {};
    $('select[id^=subject]').on('change',function() {
        var v = $(this).val();
        var f = false;
        $('select[id^=subject]').not(this).each(function() {
            if ($(this).val() == v) {
                f = true;
                return
            }
        });

        if (f) {
            // $(this).val(backups[$(this).attr('id')]);
            alert('Duplicate Subjects');
            $('select[id^="teacher"]').empty();
        }else{
            backups[$(this).attr('id') = v];
            $('select[id^="teacher"]').empty();
        }
    }).val(null);
});

$(document).ready(function() {
   $('#done').on('click',function() {
      var current_object = $(this);
      swal({
        title: "Are you sure?",
        text: "You will not be able to recover this students!",
        icon: "error",
        dangerMode: true,
        buttons: true,
        buttons: ['Cancel','Delete!']
      }).then((willDelete) => {
          if (willDelete) {
            $.ajax({
                url: '/admin/exam/delete',
                type: 'GET',
                data:{},
                dataType: 'html',
                success:function() {
                    swal("Done!","It was successfully deleted","success");
                    window.location.reload();
                },
                error: function(xhr, ajaxOptions, thrownError) {
                  swal("Error!","Please try again","error");
                }
            });
          }
      });
   });
});

