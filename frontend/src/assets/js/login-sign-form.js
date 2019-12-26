$(document).ready(function(){

$(".user-name a, .user-icon").click(function()
{
        $('#myfond_gris').fadeIn(300);
        $('.form-wrapper').fadeIn(300);
        return false;
});

$('#myfond_gris').click(function()
{
        $('#myfond_gris').fadeOut(300);
        $('.form-wrapper').fadeOut(300);
});

});
