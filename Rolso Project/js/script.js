$(document).ready(function(){

//owl carousel (home-1 page)
  $('.owl-carousel').owlCarousel({
    loop:true,
    center:true,
    stagePadding: 240,
    nav : false,
    items : 1,
    responsive:{
        0:{
            items:1,
            stagePadding: 0,
            touchDrag: true
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
        
    }
})

//blocks change text on click (home-2 page)
$ (function(){
    
    var blockText1 = 'Nam fringilla commodo lobortis. Quisque aliquet commodo orci. Pellentesque dignissim tempor erat dapibus hendrerit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridic ';
    var blockTitle1 = 'Powerfull Features of Transporterium';

    var blockText2 = 'Cras tempus dapibus dolor, quis congue augue sollicitudin et. Integer luctus lorem sit amet hendrerit suscipit. Donec nec rhoncus sapien. Proin at aliquet felis, id malesuada lacus. In et egestas orci. ';
    var blockTitle2 = 'Steps of cooperation';
    
    var blockText3 = 'Pellentesque id sollicitudin dolor.Suspendisse in porta turpis, nec commodo risus';
    var blockTitle3 = 'People and companies who trust us';

    //changing the text
    $('#firstBlock').on('click', function(){
    $('.blocks-text-change').text(blockText1);
    $('.blocks-title-change').text(blockTitle1);
    });

    $('#secondBlock').on('click', function(){
    $('.blocks-text-change').text(blockText2);
    $('.blocks-title-change').text(blockTitle2);
    });

    $('#thirdBlock').on('click', function(){
    $('.blocks-text-change').text(blockText3);
    $('.blocks-title-change').text(blockTitle3);
    });

});



//counters (home-2 page)
$(window).scroll(startCounter);
function startCounter() {
    if ($(window).scrollTop() > 200) {
        $(window).off("scroll", startCounter);
        $('.count').each(function () {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 4000,
                easing: 'swing',
                step: function () {
                    $this.text(Math.ceil(this.Counter));
                }
            });
        });
    }
}

  });