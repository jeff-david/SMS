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
    $('select[name = "subject"]').on('change',function(){
        var subjectId = $(this).val();
        var year_level = $(this).find(':selected').data('id');
        var section = $(this).find(':selected').data('section');
        var td2;
        var td;
    
        Promise.all([
            $.ajax({
                url:'/admin/assign/subject',
                type: "GET",
                dataType: "json",
                data:{"_token": $('meta[name="csrf-token"]').attr('content'), "subjectId":subjectId,'level':year_level,'section':section},
                success:function(data) {
                    $('#external-events').empty();
                    $.each(data,function(key,value) {
                        $result = $('#external-events').append('<div class="external-event bg-success" id="subject_event" data-department="'+ value['department_id'] +'" data-id="'+ value['id'] +'" style="color:white">'+ value['subject_name'] + '</div>');  
                    });
                    $('#external-events #subject_event').draggable({
                        zIndex:1000,
                        revert: true,
                        reverDuration:0
                    });
                    $('#droppable tr .subject_drag').droppable({
                        drop:function(event, ui) {
                            $(this).append($(ui.draggable));
                            $(ui.draggable).draggable('option','revert',true);

                            $('#droppable tr .subject_drag').find('#subject_event').each(function() {
                                td2 = $(this).data('department');
                            });

                        },
                        accept: "#subject_event",
                    });
                }
            }),

            $.ajax({
                url:'/admin/assign/teacher/getTeacher',
                type: "GET",
                dataType: "json",
                data:{"_token": $('meta[name="csrf-token"]').attr('content'), "subjectId":subjectId},
                success:function(data) {
                    $('.department_teacher').empty();
                    $.each(data,function(key,value) {
                        $('.department_teacher').append('<div class="external-event bg-primary" data-department="'+ value['departments_id'] +'" data-id="'+ value['id'] +'" style="color:white" id="teacher_event">'+ value['lastname'] + ',' + value['firstname'] + '</div>');  
                    });
                    var sourceColIndex;
                    $('.department_teacher .external-event').draggable({
                        zIndex:1000,
                        revert: 'invalid',
                        reverDuration:0,
                        start:function(event, ui) {
                            var foo = $(ui.helper).data('department');
                            sourceColIndex = foo;
                        }
                    });
                    var draggableClass;
                    $('#droppable tr .teacher_drag').droppable({
                        drop:function(event, ui) {
                            var $draggable = $(ui.draggable);
                            draggableClass = $draggable.data('department');
                            var foo = $(event.target);
                            var teacherCount = foo.find('#teacher_event').length;
                            if (teacherCount > 0) {
                                swal("Error!","Only One Teacher is allowed","warning");
                                $draggable.draggable('option','revert',true);
                                return false;
                            }else{
                                $(this).append($(ui.draggable));
                                $(ui.draggable).draggable('option','revert',true);
                                $('.department_teacher').empty();
                            }

                            var td;
                            $('#droppable tr .teacher_drag').find('#teacher_event').each(function() {
                                td = $(this).data('department');
                            });

                            if (td == 0 || td2 == 0) {
                                $(this).append($(ui.draggable));
                                $(ui.draggable).draggable('option','revert',true);
                            }
                            else if (td != td2) {
                                swal("Error!","Not Applicable","warning");
                                $draggable.draggable('option','revert',true);
                                return false;
                            }else{
                                $(this).append($(ui.draggable));
                                $(ui.draggable).draggable('option','revert',true);
                            }
                        },
                        accept: "#teacher_event",
                       
                    });
                }
            }).fail(function(err) {
                console.log(err);
            })
       
        ]);
    });

    $(document).ready(function() {
        
        $('#droppable tr #schedule_drag').droppable({
            drop:function(event, ui) {
                $(this).append($(ui.draggable));
                $(ui.draggable).draggable('option','revert',true);
            },
            accept: "#schedule_event",
           
        });

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

$(document).ready(function() {
    $('#external-events .external-event').draggable({
        zIndex:1070,
        revert: true,
        reverDuration:0,
    });
});

$(document).ready(function() {
    
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

