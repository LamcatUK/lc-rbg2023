// Add your custom JS here.

AOS.init({
  duration: 1000, // values from 0 to 3000, with step 50ms
  once: true,
});

jQuery(function($){
    var btn = $('#to-top');

    $(window).scroll(function () {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });

    btn.on('click', function (e) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: 0 }, '300');
    });


    $('.notifications-slider').slick({
      vertical: true,
      autoplay: true,
      autoplaySpeed: 3000,
      speed: 300,
      arrows: false
    });

},9999);