/////////////////////////////////////////////////////////////////////////
///////////////FOR OWL CAROUSEL IMAGE SLIDER/////////////////////////////
/////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
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
