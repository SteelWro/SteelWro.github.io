$(window).scroll(function () {
  parallax();
});

function parallax() {
  var scrolled = $(window).scrollTop();
  $('.background').css('top', -(scrolled * 0.15) + 'px');
}

