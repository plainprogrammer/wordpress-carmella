/* Flex slider */

$(window).load(function() {
  $('.flexslider').flexslider({
    controlNav: false
  });
});

/* Isotype */

// cache container
var $container = $('#portfolio');
// initialize isotope
$container.isotope({
  // options...
});

// filter items when filter link is clicked
$('#filters a').click(function(){
  var selector = $(this).attr('data-filter');
  $container.isotope({ filter: selector });
  return false;
});

/* Lightbox */


jQuery("a[class^='prettyPhoto']").prettyPhoto({
overlay_gallery: false, social_tools: false
});

/* Twitter */

jQuery(function($){
   $(".tweet").tweet({
      username: "ashobiz",
      join_text: "auto",
      avatar_size: 0,
      count: 3,
      auto_join_text_default: "we said,",
      auto_join_text_ed: "we",
      auto_join_text_ing: "we were",
      auto_join_text_reply: "we replied to",
      auto_join_text_url: "we were checking out",
      loading_text: "loading tweets...",
      template: "{text}"
   });
}); 
