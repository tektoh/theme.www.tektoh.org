// Generated by CoffeeScript 1.6.3
(function($) {
  "use strict";
  var $main, $navbar, getNavTop, setFix, unsetFix;
  $navbar = null;
  $main = null;
  getNavTop = function() {
    return $navbar.offset().top;
  };
  setFix = function() {
    $navbar.addClass('navbar-fixed-top');
    return $main.css({
      'padding-top': '70px'
    });
  };
  unsetFix = function() {
    $navbar.removeClass('navbar-fixed-top');
    return $main.css({
      'padding-top': ''
    });
  };
  return $(document).ready(function() {
    var navTop;
    $navbar = $('.navbar');
    $main = $('#main');
    navTop = getNavTop();
    $(window).scroll(function() {
      var width, winTop;
      width = $(window).width();
      if (width >= 992) {
        winTop = $(this).scrollTop();
        if (winTop >= navTop) {
          return setFix();
        } else if (winTop <= navTop) {
          return unsetFix();
        }
      }
    });
    return $(window).resize(function() {
      var width;
      width = $(window).width();
      if (width < 992) {
        return unsetFix();
      } else if (!$navbar.hasClass('navbar-fixed-top')) {
        return navTop = getNavTop();
      }
    });
  });
})(window.jQuery);