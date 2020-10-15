$(document).ready(function () {
    $('.search-inside a').click(function () {
        $('.search-header').toggle();

    }); 
});


$(document).scroll(function () {
    if ($(document).scrollTop() >= '150') {
        $('.header').addClass("collabsed")

    } else {
        $('.header').removeClass("collabsed")
    }
});





$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        rtl:true,
        loop:true,
        margin:20,
        nav:true,
        navText: ["<i class='fa fa-angle-right fa-2x'></i>", "<i class='fa fa-angle-left fa-2x'></i>"],
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });
  });

$(document).ready(function(){
    $('.howsub').click(function(){
        $('#mies1').fadeIn();
    });
});
