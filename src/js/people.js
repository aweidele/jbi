(function($) {
  $('.people-grid article a').on('click',function(e) {
    e.preventDefault();
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
