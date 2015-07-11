module.exports = function(grunt) {

  grunt.initConfig({
    less: {
      development: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2,
          paths: ["css"],
          livereload: true,
          sourceMap: true,
          sourceMapFilename: 'css/master.css.map',
          sourceMapUrl: 'css/master.css.map',
          sourceMapRootpath: 'http://localhost:4000/',
        },
        files: {
          'css/master.css': 'css/master.less'
        }
      }
    },
    watch: {
      less: {
        options: {
          livereload: true
        },
        files: [
          'css/**/*.less',
        ],
        tasks: ['less:development']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
}