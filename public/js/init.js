(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space

$('.carousel.carousel-slider').carousel({fullWidth: true});

$(document).ready(function(){
  $('.slider').slider();
});

$('.about-me-img').css('width', '50%');
$('.about-me-img').css('height', '60%');
