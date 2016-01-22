module.exports = function(grunt) {
  require('jit-grunt')(grunt);

  grunt.registerTask('default', ['browserify', 'uglify', 'less', 'imagemin']);
  grunt.registerTask('js', ['browserify', 'uglify']);
  grunt.registerTask('css', ['less']);

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    imagemin: {
    dynamic: {
        files: [{
            expand: true,
            cwd: 'public/images/source/',
            src: ['**/*.{png,jpg,gif}'],
            dest: 'public/images/'
        }]
    }
    },
    less: {
      production: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        files: {
          "public/css/style.prod.css": "public/css/source/style.less"
        }
      }
    },
    browserify: {
      main: {
            options: {
                browserifyOptions: {
                debug: false
            }
        },
        src: 'public/js/source/main.js',
        dest: 'public/js/main.prod.js'
      }
    },
    uglify: {
        options: {
      mangle: false,
      sourceMap: true
    },
    production: {
        files: {
            'public/js/main.prod.min.js': ['public/js/main.prod.js']
        }
      }
    },
    watch: {
      js: {
            files: 'public/js/source/*',
            tasks: ['js']
      },
      style: {
            files: ['public/css/source/**/*.less'],
            tasks: ['css'],
            options: {
                nospawn: true
            }
        }
    }
  });
}