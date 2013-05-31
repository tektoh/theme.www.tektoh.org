do ($ = window.jQuery) ->
    $('a[href^=#]').click ->
      speed = 500
      href = $(@).attr 'href'
      if href is '#' or href is ''
        target = $('html')
      else
        target = $(href)
      position = target.offset().top
      $('html,body').animate {scrollTop: position}, speed, 'swing'
      return false
