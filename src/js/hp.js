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
    windowResize();
    $(window).load(function() {
      windowResize();
    }).on('resize',function() {
      windowResize();
    }).on('scroll',function() {

    });
    $('.scroll-down').on('click',function(e){
      e.preventDefault();
      // var h = $(this).prop('href');
      // var s = $('#' + h.substring(h.indexOf("#")+1));
      if( $('.hp-navigation li.active').length ) {
        var lastActive = $('.hp-navigation li.active').last();
        if( lastActive.index() < lastActive.siblings().length ) {
          var next = lastActive.next();
        }
      } else {
        var next = $('.hp-navigation li:first-child');
      }
      var s = next.offset().top;
      $('body,html').animate({
        'scrollTop': s
      },500);
    });
  }

  function windowResize() {
    var docH = $('body').height();
    var footH = $('.main-footer').height();
  }
})(jQuery);
