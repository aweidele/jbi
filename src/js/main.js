(function($) {
  // Carousel
  $(".js-carousel").each(function() {
    var options = $(this).data("options");
    $(this).owlCarousel(options);
  });

  $('.hp-slideshow .owl-carousel').on('dragged.owl.carousel',function() {
    $(this).trigger('stop.owl.autoplay');
  });

  $('.hp-slideshow .owl-carousel .owl-nav button').on('click',function() {
    $('.hp-slideshow .owl-carousel').trigger('stop.owl.autoplay');
  });

  // HP Nav
  // windowResize();
  //
  // function windowResize() {
  //   var w = $(window).width();
  // }

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

  $('.nav-primary .menu > li').on('mouseenter',function() {
    $(this).addClass('hover');
  }).on('mouseleave',function() {
    var t = $(this);
    setTimeout(function() {
      t.removeClass('hover');
    },500);

  });
})(jQuery);
