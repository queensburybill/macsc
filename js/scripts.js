/////////////////////////////////////////////////////////////////////////
///////////////FOR OWL CAROUSEL IMAGE SLIDER/////////////////////////////
/////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoWidth: false,
        autoHeight: true,
        autoplayTimeout: 5000,
        slideSpeed: 3000,
        paginationSpeed: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        nav:false, //show next button
        dots: false, //show dots
        mouseDrag:false,
        items:1
    });
});


/////////////////////////////////////////////////////////////////////////
///////////FOR BOOTSTRAP DROPDOWN MENU ON HOVER//////////////////////////
/////////////////////////////////////////////////////////////////////////

// $('body').on('mouseenter mouseleave','.dropdown',function(e){
//   var _d=$(e.target).closest('.dropdown');_d.addClass('show');
//   setTimeout(function(){
//     _d[_d.is(':hover')?'addClass':'removeClass']('show');
//     $('[data-toggle="dropdown"]', _d).attr('aria-expanded',_d.is(':hover'));
//   },300);
// });
