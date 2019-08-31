// teacher slider start
$(document).ready(function(){
$(".owl-carousel").owlCarousel({
items:3,
loop:true,
mouseDrag:true,
nav:true,
dots:false,
autoplay:true,
autoplayTimeout:3000,
});
});
// teacher slider end

// counter js start
$('.count').each(function () {
    $(this).prop('Counter',1).animate({
        Counter: $(this).text()
    }, {
        duration: 6000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
// counter js end