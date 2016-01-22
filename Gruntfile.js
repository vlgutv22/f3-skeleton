module.exports = function(grunt) {
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browserify');

  grunt.registerTask('default', ['browserify', 'watch']);

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    browserify: {
      main: {
            options: {
                browserifyOptions: {
                debug: false
            }
        },
        src: 'public/js/main.js',
        dest: 'public/js/main.prod.js'
      }
    },
    watch: {
      files: 'public/js/*',
      tasks: ['default']
    }
  });
}