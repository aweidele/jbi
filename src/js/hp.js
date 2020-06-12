(function($) {
  if( $('.hp-navigation').length ) {
    $(window).scroll(function() {
      var windowMidPoint = (window.innerHeight / 2) + window.pageYOffset;
      $('.hp-navigation li').each(function() {
        var pos = $(this).offset().top;
        if(windowMidPoint > pos) {
          $(this).addClass('active');
        } else {
          $(this).removeClass('active');
        }
      });
    });
  }
})(jQuery);
