module.exports = function(grunt) {
  grunt.initConfig({
    less: {
      development: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2,
          sourceMap: true,
          sourceMapURL: '/wp-content/themes/wp_buttery/style.css.map'
        },
        files: {
          'themes/wp_buttery/style.css': 'themes/wp_buttery/css/master.less'
        }
      }
    },
    watch: {
      less: {
        files: ['themes/wp_buttery/css/**/*.less',],
        tasks: ['less']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['watch']);
  grunt.registerTask('build', ['less']);
}
