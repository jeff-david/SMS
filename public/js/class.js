
$(document).ready(function(){
    $('#filter').click(function(e){
        e.preventDefault();
        var option = $('[name="gradelevel"]').val();
        var linkUrl = '/admin/register/class/'+option;
        window.location.href=linkUrl;
    });
});