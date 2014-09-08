(function($) {
  "use strict";
  return $(document).ready(function() {
    $('#btn-navbar').click(function() {
      return $('.navbar-responsive-collapse').collapse('toggle');
    });
    $('.navbar-responsive-collapse').on('show.bs.collapse', function() {
      var $icon;
      $icon = $('.icon-btn-navbar');
      if (!$icon.hasClass('menu-open')) {
        return $icon.addClass('menu-open');
      }
    });
    return $('.navbar-responsive-collapse').on('hide.bs.collapse', function() {
      var $icon;
      $icon = $('.icon-btn-navbar');
      if ($icon.hasClass('menu-open')) {
        return $icon.removeClass('menu-open');
      }
    });
  });
})(window.jQuery);

(function($) {
  "use strict";
  return $(document).ready(function() {
    return $('.widget-area').masonry({
      columnWidth: 100,
      itemSelector: '.widget'
    });
  });
})(window.jQuery);

(function($) {
  "use strict";
  var defaults_, viewports_;
  viewports_ = {
    thumbnail: [
      {
        width: 1100,
        columns: 6
      }, {
        width: 900,
        columns: 5
      }, {
        width: 500,
        columns: 4
      }, {
        width: 320,
        columns: 3
      }, {
        width: 0,
        columns: 3
      }
    ],
    medium: [
      {
        width: 1100,
        columns: 4
      }, {
        width: 900,
        columns: 4
      }, {
        width: 500,
        columns: 3
      }, {
        width: 320,
        columns: 2
      }, {
        width: 0,
        columns: 2
      }
    ],
    large: [
      {
        width: 1200,
        columns: 1
      }, {
        width: 900,
        columns: 1
      }, {
        width: 500,
        columns: 1
      }, {
        width: 320,
        columns: 1
      }, {
        width: 0,
        columns: 1
      }
    ]
  };
  defaults_ = {};
  return $.fn.gallery = function(options_) {
    var Gallery, GalleryView, Item, ItemView, Items, gallery, galleryView, items, opts;
    opts = $.extend(defaults_, options_);
    /*
    Gallery Model
    */

    Gallery = Backbone.Model.extend({
      size: 'thumbnail',
      viewports: null,
      columns: 0,
      itemWidth: 0,
      initialize: function() {
        var $el, size;
        $el = this.get('view').$el;
        if ($el.hasClass('gallery-size-large')) {
          this.set({
            size: 'large'
          });
        } else if ($el.hasClass('gallery-size-medium')) {
          this.set({
            size: 'medium'
          });
        }
        size = this.get('size');
        if (!_.isUndefined(viewports_[size])) {
          return this.set({
            viewports: viewports_[size]
          });
        } else {
          return this.set({
            viewports: viewports_.thumbnail
          });
        }
      },
      setGallerySize: function() {
        var columns, viewport, width, _i, _len, _ref;
        width = this.get('view').$el.innerWidth();
        columns = 0;
        _ref = this.get('viewports');
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
          viewport = _ref[_i];
          if (width > viewport.width && viewport.columns > columns) {
            columns = viewport.columns;
          }
        }
        this.set({
          galleryWidth: width
        });
        this.set({
          itemWidth: Math.floor(width / columns) - 2
        });
        return this.set({
          columns: columns
        });
      }
    });
    /*
    Gallery View
    */

    GalleryView = Backbone.View.extend({
      el: $(this),
      firstRender: true,
      timer: false,
      render: function() {
        var $el, firstRender, gallery, size,
          _this = this;
        firstRender = this.firstRender;
        size = null;
        $el = this.$el;
        gallery = this.model;
        if (this.firstRender) {
          this.firstRender = false;
          $(window).resize(function() {
            if (_this.timer !== false) {
              clearTimeout(_this.timer);
            }
            return _this.timer = setTimeout(function() {
              _this.render();
              return _this.timer = false;
            }, 200);
          });
          imagesLoaded($el, function() {
            return _this.render();
          });
        }
        gallery.setGallerySize();
        this.collection.each(function(item) {
          return item.get('view').render(gallery);
        });
        return setTimeout(function() {
          return $el.masonry({
            itemSelector: '.gallery-item',
            isResizeBound: false
          });
        });
      }
    });
    /*
    Item Model
    */

    Item = Backbone.Model.extend({
      defaults: {
        data: [],
        href: null,
        title: null,
        view: null
      },
      initialize: function() {
        var $el, _data;
        $el = this.get('view').$el;
        this.set({
          href: $el.attr('data-href'),
          title: $el.attr('data-title')
        });
        _data = [];
        $el.find('.gallery-item-data').each(function() {
          return _data.push({
            src: $(this).attr('data-src'),
            minWidth: Number($(this).attr('data-min-width'))
          });
        });
        return this.set({
          data: _data
        });
      },
      getSrc: function(itemWidth) {
        var minWidth, src;
        src = '#';
        minWidth = 2048;
        _.each(this.get('data'), function(data) {
          if (data.minWidth >= itemWidth && minWidth > data.minWidth) {
            minWidth = data.minWidth;
            return src = data.src;
          }
        });
        return src;
      }
    });
    /*
    Items Collection
    */

    Items = Backbone.Collection.extend({
      model: Image
    });
    /*
    Item View
    */

    ItemView = Backbone.View.extend({
      initialize: function() {
        return $(this.el).append('<a href="#"><img /></a>');
      },
      render: function(gallery) {
        var $a, $el, $img, columns, itemWidth;
        $el = this.$el;
        columns = gallery.get('columns');
        itemWidth = gallery.get('itemWidth');
        $el.width(itemWidth);
        $el.css({
          'padding': '1px'
        });
        $a = $el.find('a');
        $img = $el.find('img');
        if (!$a.hasClass('thumbnail')) {
          $a.addClass('thumbnail');
        }
        $a.attr('href', this.model.get('href'));
        $a.attr('title', this.model.get('title'));
        $img.attr('src', this.model.getSrc(itemWidth));
        return $img.attr('alt', this.model.get('title'));
      }
    });
    items = new Items();
    $(this).find('.gallery-item').each(function() {
      var item, itemView;
      itemView = new ItemView({
        el: $(this)
      });
      item = new Item({
        view: itemView
      });
      itemView.model = item;
      return items.add(item);
    });
    galleryView = new GalleryView({
      collection: items
    });
    gallery = new Gallery({
      view: galleryView
    });
    galleryView.model = gallery;
    return galleryView.render();
  };
})(window.jQuery);

(function($) {
  return $(document).ready(function() {
    return $('.gallery').each(function() {
      return $(this).gallery();
    });
  });
})(window.jQuery);

(function($) {
  "use strict";
  return $(document).ready(function() {
    var resize;
    resize = function() {
      var $element, height;
      height = $(window).height();
      $element = $('img.attachment-image');
      return $element.each(function() {
        return $element.css({
          'max-height': (height - 61 - 60 - 20) + 'px'
        });
      });
    };
    $(window).resize(resize);
    return setTimeout(resize, 0);
  });
})(window.jQuery);

(function($) {
  "use strict";
  var $main, $navbar, getNavTop, setFix, unsetFix;
  $navbar = null;
  $main = null;
  getNavTop = function() {
    return $navbar.offset().top;
  };
  setFix = function() {
    $navbar.addClass('navbar-fixed-top');
    return $main.css({
      'padding-top': '70px'
    });
  };
  unsetFix = function() {
    $navbar.removeClass('navbar-fixed-top');
    return $main.css({
      'padding-top': ''
    });
  };
  return $(document).ready(function() {
    var navTop;
    $navbar = $('.navbar');
    $main = $('#main');
    navTop = getNavTop();
    $(window).scroll(function() {
      var width, winTop;
      width = $(window).width();
      if (width >= 992) {
        winTop = $(this).scrollTop();
        if (winTop >= navTop) {
          return setFix();
        } else if (winTop <= navTop) {
          return unsetFix();
        }
      }
    });
    return $(window).resize(function() {
      var width;
      width = $(window).width();
      if (width < 992) {
        return unsetFix();
      } else if (!$navbar.hasClass('navbar-fixed-top')) {
        return navTop = getNavTop();
      }
    });
  });
})(window.jQuery);

(function($) {
  "use strict";
  return $('a[href^=#]').click(function() {
    var href, position, speed, target;
    speed = 500;
    href = $(this).attr('href');
    if (href === '#' || href === '') {
      target = $('html');
    } else {
      target = $(href);
    }
    position = target.offset().top;
    $('html,body').animate({
      scrollTop: position
    }, speed, 'swing');
    return false;
  });
})(window.jQuery);

/*
//@ sourceMappingURL=script.js.map
*/