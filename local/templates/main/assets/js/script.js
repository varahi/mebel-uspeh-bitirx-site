$(document).ready(function(){
    const slider = $("#slider_news").owlCarousel({
        loop:true,
        margin:30,
        nav:true,
autoplay:false,
autoplayTimeout:5000,
smartSpeed:250,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });
});


$(document).ready(function(){
    const slider = $("#slider_reviews").owlCarousel({
        loop:true,
        margin:30,
        nav:true,
autoplay:false,
autoplayTimeout:5000,
smartSpeed:250,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
});



