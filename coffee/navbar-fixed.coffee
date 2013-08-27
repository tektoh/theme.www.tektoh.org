do ($ = window.jQuery) ->
  "use strict"

  $navbar = null
  $main = null

  getNavTop = -> $navbar.offset().top

  setFix = ->
    $navbar.addClass 'navbar-fixed-top'
    $main.css {'padding-top':'70px'}

  unsetFix = ->
    $navbar.removeClass 'navbar-fixed-top'
    $main.css {'padding-top':''}

  $(document).ready ->
    $navbar = $('.navbar')
    $main = $('#main')
    navTop = getNavTop()

    $(window).scroll ->
      width = $(window).width()
      if width >= 992
        winTop = $(@).scrollTop()
        if winTop >= navTop
          setFix()
        else if winTop <= navTop
          unsetFix()
    $(window).resize ->
      width = $(window).width()
      if width < 992
        unsetFix()
      else unless $navbar.hasClass 'navbar-fixed-top'
        navTop = getNavTop()
