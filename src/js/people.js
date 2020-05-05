(function($) {
  $('.people-grid article a').on('click',function(s) {
    $('.people-grid article').each(function() {
      $(this).removeClass('open');
    });

    $(this).parent().addClass('open');
  });

  $('.people-grid article button').on('click',function() {
    $('.people-grid article').each(function() {
      $(this).removeClass('open');
    });
  });
})(jQuery);
