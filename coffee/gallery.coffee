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


