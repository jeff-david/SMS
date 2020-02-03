$(document).ready(function(){
    $('#class').DataTable({
        "columnDefs": [
            { "width": "10%", "targets": 2 },
            { "width": "15%", "targets": 0 },
            { "width": "20%", "targets": 0 }
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