
if($('.hot-case-detail-page') || $('.history-case-detail-page')){
    $(".fancybox-effects-a").fancybox({
        prevEffect  : 'fade',
        nextEffect  : 'fade',
        helpers: {
            title : {
                type : 'outside'
            },
            overlay : {
                speedOut : 0
            }
        }

    });    
}



$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    focusOnSelect: true,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({

    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    variableWidth: true,
    infinite: true,
    responsive: [{
            breakpoint: 800,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }
    ]
});