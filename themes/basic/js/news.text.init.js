jQuery(document).ready(function($) {
  $('.view-news .text').each(function() {
    $(this).find('a').detach().appendTo($(this).find('p').append('&nbsp;&nbsp;&nbsp;'));
  });
});
