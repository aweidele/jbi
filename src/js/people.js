(function($) {
  $('.people-grid article').on('click',function() {
    $('.people-grid article').each(function() {
      $(this).removeClass('open');
    });

    $(this).addClass('open');
  });

  $('.people-grid article button').on('click',function() {
    $('.people-grid article').each(function() {
      $(this).removeClass('open');
    });
  });
})(jQuery);
