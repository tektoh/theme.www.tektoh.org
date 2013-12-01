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

do ($ = window.jQuery) ->
  "use strict"

  $(document).ready ->
    $('.widget-area').masonry
      itemSelector: '.widget'

do ($ = window.jQuery) ->
  "use strict"

  viewports_ =
    thumbnail: [
      { width:1100, columns:6 }
      { width: 900, columns:5 }
      { width: 500, columns:4 }
      { width: 320, columns:3 }
      { width:   0, columns:3 }
    ]
    medium: [
      { width:1100, columns:4 }
      { width: 900, columns:4 }
      { width: 500, columns:3 }
      { width: 320, columns:2 }
      { width:   0, columns:2 }
    ]
    large: [
      { width:1200, columns:1 }
      { width: 900, columns:1 }
      { width: 500, columns:1 }
      { width: 320, columns:1 }
      { width:   0, columns:1 }
    ]
  
  defaults_ = {}

  $.fn.gallery = (options_)->
    
    opts = $.extend defaults_, options_

    ###
    Gallery Model
    ###
    Gallery = Backbone.Model.extend
      size: 'thumbnail'
      viewports: null
      columns: 0
      itemWidth: 0
      initialize: ->
        $el = @get('view').$el
        if $el.hasClass 'gallery-size-large'
          @set size:'large'
        else if $el.hasClass 'gallery-size-medium'
          @set size:'medium'
        
        size = @get 'size'
        unless _.isUndefined viewports_[size]
          @set viewports: viewports_[size]
        else
          @set viewports: viewports_.thumbnail
          
      setGallerySize: ->
        width = @get('view').$el.innerWidth()
        columns = 0
        for viewport in @get 'viewports'
          if width > viewport.width and viewport.columns > columns
            columns = viewport.columns
            
        @set galleryWidth: width
        @set itemWidth: Math.floor(width / columns) - 2
        @set columns: columns

    ###
    Gallery View
    ###
    GalleryView = Backbone.View.extend
      el: $(@)
      firstRender: true
      timer: false
      render: ->
        firstRender = @firstRender
        size = null
        $el = @$el
        gallery = @model
        
        if @firstRender
          @firstRender = false
          $(window).resize =>
            clearTimeout @timer if @timer isnt false
            @timer = setTimeout =>
              @render()
              @timer = false
            , 200
          imagesLoaded $el, =>
            @render()
          
        gallery.setGallerySize()
        @collection.each (item)->
          item.get('view').render gallery
        setTimeout ->
          $el.masonry
            itemSelector: '.gallery-item'
            isResizeBound: false
   
    ###
    Item Model
    ###
    Item = Backbone.Model.extend
      defaults:
        data: []
        href: null
        title: null
        view: null
      initialize: ->
        $el = @get('view').$el
        @set
          href: $el.attr 'data-href'
          title: $el.attr 'data-title'
        
        _data = []
        $el.find('.gallery-item-data').each ->
          _data.push
            src: $(@).attr 'data-src'
            minWidth: Number $(@).attr 'data-min-width'
        @set data:_data
                
      getSrc: (itemWidth)->
        src = '#'
        minWidth = 2048
        _.each @get('data'), (data)->
          if data.minWidth >= itemWidth and minWidth > data.minWidth
            minWidth = data.minWidth
            src = data.src
        return src
    
    ###
    Items Collection
    ###
    Items = Backbone.Collection.extend
      model: Image
        
    ###
    Item View
    ###
    ItemView = Backbone.View.extend
      initialize: ->
        $(@el).append '<a href="#"><img /></a>'
        
      render: (gallery)->
        $el = @$el
        columns = gallery.get 'columns'
        itemWidth = gallery.get 'itemWidth'
        
        $el.width itemWidth
        $el.css 'padding':'1px'

        $a = $el.find 'a'
        $img = $el.find 'img'

        $a.addClass 'thumbnail' unless $a.hasClass 'thumbnail'
        $a.attr 'href', @model.get 'href'
        $a.attr 'title', @model.get 'title'
        $img.attr 'src', @model.getSrc itemWidth
        $img.attr 'alt', @model.get 'title'
    
    # Item初期化
    items = new Items()
    $(@).find('.gallery-item').each ->
      itemView = new ItemView
        el: $(@)
      item = new Item
        view: itemView
      itemView.model = item
      items.add item
    
    # Gallery初期化
    galleryView = new GalleryView
      collection: items
    gallery = new Gallery
      view: galleryView
    galleryView.model = gallery
      
    galleryView.render()

do ($ = window.jQuery) ->
  $(document).ready ->
    $('.gallery').each -> $(@).gallery()



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

do ($ = window.jQuery) ->
  "use strict"

  $(document).ready ->
    $('.presentation .content-article').css
      'min-height': document.documentElement.clientHeight

    aIndex = 1
    $(window).scroll ->
      scrollBottom = $(window).scrollTop() + $(window).height()
      $("#article-#{aIndex}").each ->
        $article = $(this)
        articleOffset = $article.offset()
        console.log articleOffset.top, scrollBottom
        if (articleOffset.top + 180) < scrollBottom
          $article.animate({'opacity':'1.0'}, 2000)
          aIndex++

do ($ = window.jQuery) ->
  "use strict"

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
