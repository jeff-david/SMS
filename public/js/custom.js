function createUsername() {
    var firstname = $('input[name=firstname]').val().split(' ');
    if (firstname.length == 3) {
        var first = firstname[0];
        var second = firstname[1];
        var f = first.substring(0,1).toLowerCase();
        var lname = $('input[name=lastname]').val().toLowerCase();
        var s = second.substring(0,1).toLowerCase();
        var date = $('input[name=birthday]').val().split('-');
        var bday = date[0].toString();
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

function createPassword() {
    var firstname = $('input[name=firstname]').val().split(' ');
    var date = $('input[name=birthday]').val().split('-');
    var bday = date[0].toString();
    if (firstname.length == 3) {
        var first = firstname[0];
        var second = firstname[1];
        var f = first.substring(0,1).toLowerCase();
        var lname = $('input[name=lastname]').val().toLowerCase();
        var s = second.substring(0,1).toLowerCase();
        var password = f + s + lname + bday;
        $('input[name = password]').val(password);
    }else{
        var fname = $('input[name=firstname]').val().substring(0,1).toLowerCase();  
        var lname = $('input[name=lastname]').val().toLowerCase();
        var password = fname + lname + bday;
   
        $('input[name = password]').val(password);
   
    }
}


$('input[name = firstname]').on('keyup',createUsername);
$('input[name = lastname]').on('keyup',createUsername);
$('input[name = birthday]').on('change',createPassword);