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
