// what are you waiting for?

var $j = jQuery.noConflict();

$j(document).ready(function(){

  // $j('.js-slider').slick({
  //           slidesToShow: 3,
  //             slidesToScroll: 1,
  //             autoplay: true,
  //             autoplaySpeed: 2000,
  //         });


  // Add smooth scrolling to all links
  $j("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $j('html, body').animate({
        scrollTop: $j(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });



});
       
//Slide Down Portfolio on Front Page

jQuery( '#js-slider-btn' ).on('click', function(e){
  e.preventDefault();
  jQuery( '.lh-portfolio-slider').slideDown('1500');
  // jQuery('#js-slider-btn').html('Close').addClass('slider-opened');
         });

jQuery('.lh-close-btn').click(function(){
  jQuery('.lh-portfolio-slider').slideUp('1500');

});


jQuery( '.lh-mobile-toggle' ).click(function(){
  jQuery( '.menu-menu-front-page-container').slideToggle('1500');
  // jQuery('#js-slider-btn').html('Close').addClass('slider-opened');
         });

jQuery('.menu-menu-front-page-container li').click(function(){
  jQuery('.menu-menu-front-page-container').slideUp('1500');

});




// jQuery('.slider-opened').on('click', function(e){
//   e.preventDefault();
//   console.log('fire');
//   jQuery('.lh-portfolio-slider').slideUp('1000');
//   jQuery('#js-slider-btn').html('See My Work').removeClass('slider-opened');
//           });


