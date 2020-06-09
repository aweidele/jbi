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

  // Mobile Nav
  $('.nav-primary .menu > li > button').on('click',function() {
    var item = $(this).parent();
    item.siblings().removeClass('current-menu-item');
    if(item.hasClass('current-menu-item')) {
      item.removeClass('current-menu-item');
    } else {
      item.addClass('current-menu-item');
    }
  });
  $('.hamburger').on('click',function() {
    $(this).toggleClass('open');
    $(this).parent().toggleClass('open');
  });
})(jQuery);
