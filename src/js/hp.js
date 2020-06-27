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

  if($('.scroll-down').length) {
    $('.scroll-down').on('click',function(e){
      e.preventDefault();
      var h = $(this).prop('href');
      var s = $('#' + h.substring(h.indexOf("#")+1));
      $('body,html').animate({
        'scrollTop': s.offset().top
      },500);
    });
  }
})(jQuery);
