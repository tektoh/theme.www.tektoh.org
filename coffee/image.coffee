do ($ = window.jQuery) ->
  "use strict"

  $(document).ready ->
    resize = ->
      height = $(window).height()
      $element = $('img.attachment-image')
      $element.each ->
        $element.css({
          'max-height': (height-61-60-20)+'px'
        })

    $(window).resize resize
    setTimeout resize, 0
