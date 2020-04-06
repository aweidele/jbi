(function($) {
  // Carousel
  $(".owl-carousel").each(function() {
    var options = $(this).data("options");
    console.log(options);
    $(this).owlCarousel(options);
  });
})(jQuery);
