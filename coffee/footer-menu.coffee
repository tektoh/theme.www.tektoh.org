do ($ = window.jQuery) ->
  "use strict"

  $(document).ready ->
    $('.widget-area').masonry
      columnWidth: 100
      itemSelector: '.widget'
