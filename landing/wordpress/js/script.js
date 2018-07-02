$(window).scroll(function() {
    if($(this).scrollTop() > 50) 
    {
        $('.opaque-navbar').addClass('opaque');
    } else {
        $('.opaque-navbar').removeClass('opaque');
    }
});
$('.carousel').carousel({
    interval: 5000 //changes the speed
});