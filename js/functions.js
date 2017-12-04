$(document).ready(function(){
    $(window).scroll(function(){
        if(window.pageYOffset != 0){
            $('.navbar-default').addClass('black-header');
        } else{
            $('.navbar-default').removeClass('black-header');
        }
    });
});

/*$(document).ready(function(){
    $('.item').on('click', function(){
        if($('.carousel-indicators li').next() != 0){
            $('.carousel-indicators li').click();
        }else{
            $('.carousel-indicators li').prev().click();
        }        
    });
});*/

$(".carousel").swipe({

  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

    if (direction == 'left') $(this).carousel('next');
    if (direction == 'right') $(this).carousel('prev');

  },
  allowPageScroll:"vertical"

});