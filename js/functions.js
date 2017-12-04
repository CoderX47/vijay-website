$(document).ready(function(){
    $(window).scroll(function(){
        if(window.pageYOffset != 0){
            $('.navbar-default').addClass('black-header');
        } else{
            $('.navbar-default').removeClass('black-header');
        }
    });
});



