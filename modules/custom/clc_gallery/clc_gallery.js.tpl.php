jQuery(document).ready(function($) {
  $('.node-album').each(function() {
    $(this).find('img').wrap('<a href="'+$(this).find('.album-title a').attr('href')+'"></a>');
  });
});
