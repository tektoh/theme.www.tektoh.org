NODE_BIN = node_modules/.bin
YUICOMPRESSOR = $(NODE_BIN)/yuicompressor
JSCOMPRESSFLAGS = --type js --charset UTF-8
LESSC = $(NODE_BIN)/lessc
LESSFLAGS = --yui-compress
COFFEE = $(NODE_BIN)/coffee
COFFEEFLAGS = -b -c
COFFEEFILES = $(wildcard script/*.coffee)
JSFILES = $(COFFEEFILES:.coffee=.js)
COFFEELINT = $(NODE_BIN)/coffeelint

.PHONY: clean

.SUFFIXES: .js .coffee
.coffee.js:
	$(COFFEELINT) $<
	$(COFFEE) $(COFFEEFLAGS) $<

build: css js

css: style.css

style.css: less/*.less less/*/*.less
	$(LESSC) $(LESSFLAGS) $< $@

js: js/script.min.js

js/script.min.js: script/script.js
	$(YUICOMPRESSOR) $(JSCOMPRESSFLAGS) $< -o $@

script/script.js: $(JSFILES)
	cat $(JSFILES) > $@

clean:
	rm -f css/style.css
	rm -f script/script.js js/script.min.js
	rm -f $(JSFILES)
