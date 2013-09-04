do ($ = window.jQuery) ->
  "use strict"

  $(document).ready ->
    $('.widget-area').masonry
      itemSelector: '.widget'
