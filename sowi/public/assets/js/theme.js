// Custome theme code

if ($('.clean-gallery').length > 0) {
   baguetteBox.run('.clean-gallery', { animation: 'slideIn'});
}

if ($('.clean-product').length > 0) {
    $(window).on("load",function() {
        $('.sp-wrap').smoothproducts();
    });
}

$(function() {
  
  $('.scrollup').click(function() {
  
    $("html, body").animate({
      scrollTop:0
    },1000);
  })
})

$(window).scroll(function() {
  
  if ($(this).scrollTop()>200) {
 
    $('.scrollup').fadeIn();
  }

  else {
    $('.scrollup').fadeOut();
  }
});

 