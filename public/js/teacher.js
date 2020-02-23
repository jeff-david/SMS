$(document).ready(function() {
    $('#birthDate').on('change',function() {
        var date = $(this).val();
        var dob = new Date(date);
        var  today = new Date();
        var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
        console.log(age);
        if (age < 21) {
            alert('Invalid Age')
        }else{
            $('#age').val(age);
        }
    });

   
}); 

