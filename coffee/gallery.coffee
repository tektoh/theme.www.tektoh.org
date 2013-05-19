do ($ = window.jQuery) ->
  "use strict"
  $(document).ready ->
    resize = ->
      $element = $('ul.gallery')
      $element.each ->

        width = $(@).width()

        if $(@).hasClass 'gallery-columns-1'
          size = width
        else if $(@).hasClass 'gallery-columns-2'
          size = Math.floor width / 2
        else if $(@).hasClass 'gallery-columns-3'
          size = Math.floor width / 3
        else if $(@).hasClass 'gallery-columns-4'
          size = Math.floor width / 4
        else if $(@).hasClass 'gallery-columns-5'
          size = Math.floor width / 5
        else if $(@).hasClass 'gallery-columns-6'
          size = Math.floor width / 6
        else if $(@).hasClass 'gallery-columns-7'
          size = Math.floor width / 7
        else if $(@).hasClass 'gallery-columns-8'
          size = Math.floor width / 8
        else if $(@).hasClass 'gallery-columns-9'
          size = Math.floor width / 9
        else
          size = width

        margin = Math.floor size * 0.05
        padding = Math.floor size * 0.05
        size = size - margin - 2

        $(@).find('.gallery-img-list').each ->
          $(@).css 'padding': margin / 2
          $(@).find('.gallery-img-wrap').each ->
            $(@).css
              'width': size
              'height': size
            .find('img')
            .css
              'max-width': size - padding
              'max-height': size - padding
            .removeAttr('width')
            .removeAttr('height')

    $(window).resize resize
    setTimeout resize, 0
