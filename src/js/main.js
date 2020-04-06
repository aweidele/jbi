(function($) {
  // Carousel
  $(".owl-carousel").each(function() {
    var options = $(this).data("options");
    console.log(options);
    $(this).owlCarousel(options);
  });

  // HP Nav
  windowResize();

  function windowResize() {
    var w = $(window).width();

  }
})(jQuery);
