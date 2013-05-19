NODE_BIN = node_modules/.bin
YUICOMPRESSOR = $(NODE_BIN)/yuicompressor
JSCOMPRESSFLAGS = --type js --charset UTF-8
LESSC = $(NODE_BIN)/lessc
LESSFLAGS = --yui-compress
COFFEE = $(NODE_BIN)/coffee
COFFEEFLAGS = -b -c -l
BOOTSTRAP_SCRIPTS = libs/bootstrap/js/bootstrap-transition.js \
	libs/bootstrap/js/bootstrap-carousel.js \
	libs/bootstrap/js/bootstrap-collapse.js

build: css js

css: css/style.css

css/style.css: less/style.less
	$(LESSC) $(LESSFLAGS) $< $@

js: js/script.min.js js/bootstrap.min.js

js/script.min.js: js/script.js
	$(YUICOMPRESSOR) $(JSCOMPRESSFLAGS) $< -o $@

js/bootstrap.min.js: js/bootstrap.js
	$(YUICOMPRESSOR) $(JSCOMPRESSFLAGS) $< -o $@

js/script.js: js/carousel.js js/gallery.js js/image.js
	cat js/carousel.js js/gallery.js js/image.js > $@

js/carousel.js: coffee/carousel.coffee
	$(COFFEE) $(COFFEEFLAGS) -o js $<

js/gallery.js: coffee/gallery.coffee
	$(COFFEE) $(COFFEEFLAGS) -o js $<

js/image.js: coffee/image.coffee
	$(COFFEE) $(COFFEEFLAGS) -o js $<

js/bootstrap.js:
	cat $(BOOTSTRAP_SCRIPTS) > $@

clean:
	rm -f css/style.css
	rm -f js/script.min.js js/bootstrap.min.js
	rm -f js/script.js js/bootstrap.js
	rm -f js/carousel.js js/gallery.js
