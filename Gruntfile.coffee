module.exports = (grunt)->
  grunt.loadNpmTasks 'grunt-contrib-watch'
  grunt.loadNpmTasks 'grunt-contrib-uglify'
  grunt.loadNpmTasks 'grunt-contrib-coffee'
  grunt.loadNpmTasks 'grunt-coffeelint'
  grunt.loadNpmTasks 'grunt-contrib-less'
  
  grunt.initConfig
    pkg: grunt.file.readJSON 'package.json'
    coffeelint:
      app: ['coffee/*.coffee']

    coffee:
      options:
        sourceMap: true
      compile:
        files:
          'js/script.js': ['coffee/*.coffee']

    uglify:
      production:
        options:
          sourceMap: 'script.min.js.map'
          sourceMapIn: 'js/script.js.map'
        files:
          'js/script.min.js': ['js/script.js']

    less:
      production:
        files:
          'style.css': 'less/style.less'

    watch:
      coffee:
        files: 'coffee/*.coffee'
        tasks: [
          'coffeelint'
          'coffee'
          'uglify'
        ]
      less:
        files: [
          'less/*.less'
          'less/*/*.less'
        ]
        tasks: [
          'less'
        ]

  grunt.registerTask 'default', [
    'coffeelint'
    'coffee'
    'uglify'
    'less'
  ]
