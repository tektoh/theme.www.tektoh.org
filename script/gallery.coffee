do ($ = window.jQuery) ->
  "use strict"
  Conf = {}
  Conf.viewports = {}
  Conf.viewports.thumbnail = [
    { width:1200, columns:6 }
    { width: 900, columns:5 }
    { width: 500, columns:4 }
    { width: 320, columns:3 }
    { width:   0, columns:2 }
  ]
  Conf.viewports.medium = [
    { width:1200, columns:4 }
    { width: 900, columns:3 }
    { width: 500, columns:3 }
    { width: 320, columns:2 }
    { width:   0, columns:2 }
  ]
  Conf.viewports.large = [
    { width:1200, columns:1 }
    { width: 900, columns:1 }
    { width: 500, columns:1 }
    { width: 320, columns:1 }
    { width:   0, columns:1 }
  ]

  getColumns = (width, size)->
    columns = 0

    if typeof(Conf.viewports[size]) isnt 'undefined'
      viewports = Conf.viewports[size]
    else
      viewports = Conf.viewports.thumbnail

    for viewport in viewports
      if width > viewport.width and viewport.columns > columns
        columns = viewport.columns
    return columns

  $(document).ready ->

    $('.gallery').each ->
      $(@).find('.gallery-item').each ->
        $(@).append '<a href="#"><img /></a>'

    resize_func = ->
      $('.gallery').each ->
        $container = $(@)

        if $(@).hasClass 'gallery-size-large'
          gallerySize = 'large'
        else if $(@).hasClass 'gallery-size-medium'
          gallerySize = 'medium'
        else
          gallerySize = 'thumbnail'

        container_width = $container.width()
        columns = getColumns container_width, gallerySize
        item_width = Math.floor(container_width / columns)

        $container.find('.gallery-item').each ->
          $item = $(@)
          $item.width "#{item_width}px"
          $item.css {'padding':'1px'}

          href = $item.attr 'data-href'
          title = $item.attr 'data-title'

          src = '#'
          min_width = 99999

          $item.find('.gallery-image-data').each ->
            $data = $(@)

            data_min_width = Number $data.attr 'data-min-width'
            data_min_width = 0 if typeof(data_min_width) is 'undefined'

            if data_min_width > item_width and min_width > data_min_width
              min_width = data_min_width
              src = $data.attr 'data-src'

          $a = $item.find('a')
          $img = $item.find('img')

          $a.addClass 'thumbnail' unless $a.hasClass 'thumbnail'
          $a.attr 'href', href
          $a.attr 'title', title
          $img.attr 'src', src
          $img.attr 'alt', title

        imagesLoaded $container, ->
          $container.masonry {
            itemSelector: '.gallery-item'
          }

    $(window).resize resize_func
    setTimeout resize_func, 0
