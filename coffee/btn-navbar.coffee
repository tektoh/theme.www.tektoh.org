do ($ = window.jQuery) ->
  "use strict"

  $(document).ready ->
    $('#btn-navbar').click -> $('.navbar-responsive-collapse').collapse 'toggle'

    $('.navbar-responsive-collapse').on 'show.bs.collapse', ->
      $icon = $('.icon-btn-navbar')
      if not $icon.hasClass('menu-open')
        $icon.addClass 'menu-open'

    $('.navbar-responsive-collapse').on 'hide.bs.collapse', ->
      $icon = $('.icon-btn-navbar')
      if $icon.hasClass('menu-open')
        $icon.removeClass 'menu-open'
