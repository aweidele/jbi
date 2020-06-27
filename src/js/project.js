(function($) {
  if($('body').hasClass('project-detail')) {
    var heroH = $('.project-hero').height();
    var headerH = $('.main-header').height();
    $(window).load(function() {
      var heroH = $('.project-hero').height();
      var headerH = $('.main-header').height();
    }).on('resize',function() {
      var heroH = $('.project-hero').height();
      var headerH = $('.main-header').height();
    }).on('scroll',function() {
      var s = $(window).scrollTop() + headerH;
      if(s > heroH) {
        $('body').addClass('scrolled');
      } else {
        $('body').removeClass('scrolled');
      }
    });
  }
})(jQuery);
