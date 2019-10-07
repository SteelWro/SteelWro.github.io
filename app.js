$(window).scroll(function () {
  parallax();
});

function parallax() {
  var scrolled = $(window).scrollTop();
  $('.background').css('top', -(scrolled * 0.15) + 'px');
}

// $(window).resize(function(){
//   If($(window).width()<700){
//    $('.row').removeClass('fade');
//   }
//  });
 



