//Link active
$('a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function (event) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate(
          {
            scrollTop: target.offset().top,
          },
          1000,
          function () {
            var $target = $(target);
            $target.focus();
            if ($target.is(':focus')) {
              return false;
            } else {
              $target.attr('tabindex', '-1');
              $target.focus();
            }
          }
        );
      }
    }
  });
$(document).ready(function () {
  $('.mobile-bar').click(function () {
    $('nav ul').toggleClass('active');
    $('.mobile-bar1').toggleClass('active');
    $('.mobile-bar2').toggleClass('active');
    $('.mobile-bar3').toggleClass('active');
  });
});
$(document).ready(function () {
  $('#produk').click(function () {
    $('nav ul ul').toggleClass('active');
    $(this).toggleClass('active');
  });
});
