module.exports = function(grunt) {

  grunt.initConfig({
    copy: {
      tempBaseCopy: {
        files: [
          { expand: true, cwd: 'source/php/',src: ['**',], dest: 'temp/base/php/' },
          { expand: true, cwd:'vendor/', src: [ '**',], dest: 'temp/base/vendor/' },
          { expand: true, cwd: 'source/js/', src: [ '*.js' ], dest: 'temp/base/js/' },
          { expand: true, cwd: 'source/assets/',src: [ '**', ], dest: 'temp/base/assets/' },
          { expand: true, cwd: 'bower_components/bootstrap/dist/', src: [ '**/*.min.css','**/**.min.js' ], dest: 'temp/base/frontendvendors/bootstrap/' },
          { expand: true, cwd: 'bower_components/jquery/dist/', src: ['**/jquery.min.js' ], dest: 'temp/base/frontendvendors/jquery/' }
        ]
      }
    },

    sass: {
      tempBaseBuild:{
        options: {
          style: 'expanded'
        },
        files: {
          'temp/base/css/style.css': 'source/sass/style.scss',
        }
      }
    },

  });

  //Last grunt-moduler
  require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

  //registrer tasks
  grunt.registerTask('default', ['copy','sass']);
};
