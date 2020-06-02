(function($) {
  // Carousel
  $(".js-carousel").each(function() {
    var options = $(this).data("options");
    console.log(options);
    $(this).owlCarousel(options);
  });

  $('.scroll-down').on('click',function(e){
    e.preventDefault();
    var h = $(this).prop('href');
    var s = $('#' + h.substring(h.indexOf("#")+1));
    $('body,html').animate({
      'scrollTop': s.offset().top
    },500);
  });

  // HP Nav
  windowResize();

  function windowResize() {
    var w = $(window).width();
  }
})(jQuery);
