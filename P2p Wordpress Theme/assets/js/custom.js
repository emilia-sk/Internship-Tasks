jQuery(function($){
$(document).ready(function () {

    $('#navbarMobile').on('show.bs.collapse', function () {
        $('body').addClass('nav-opened');
        $('nav').addClass('position-fixed')
    })

    $('#navbarMobile').on('hidden.bs.collapse', function () {
        $('body').removeClass('nav-opened');
    })

    $('#navbarMobile').on('hidden.bs.collapse', function () {
        $('nav').removeClass('position-fixed')
    })

    $('#video-modal').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget)
        let video = button.data('video');
        $(this).find("iframe:eq(0)").attr("src", "https://www.youtube.com/embed/" + video)
    })

    $('#video-modal').on('hidden.bs.modal', function (event) {
        $(this).find("iframe:eq(0)").attr("src", "#")
    })

    $('.slider').slick({
        dots: false,
        arrows: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 960,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false
                }
            }

        ],
        prevArrow: '<img src="/assets/img/prev-arrow.svg" class="slick-prev">',
        nextArrow: '<img src="/assets/img/next-arrow.svg" class="slick-next">'
    });

 


    $('.registerBtn').click(function () {
        $('.login').fadeOut();
        $('.register').fadeIn();
    })

    $('.btn-back-to-login').click(function () {
        $('.register').fadeOut('hidden');
        $('.login').fadeIn('hidden');
    })
})
});