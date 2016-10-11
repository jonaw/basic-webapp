module.exports = function(grunt) {

  grunt.initConfig({
    copy: {
      tempBaseCopy: {
        files: [
          { expand: true, cwd: 'source/php/',src: ['**',], dest: 'temp/base/php/' },
          { expand: true, cwd: 'vendor/', src: [ '**',], dest: 'temp/base/vendor/' },
          { expand: true, cwd: 'source/js/', src: [ '**.js' ], dest: 'temp/base/js/', flatten: true},
          { expand: true, cwd: 'source/assets/',src: [ '**', ], dest: 'temp/base/assets/' },
          { expand: true, cwd: 'bower_components/bootstrap/dist/', src: [ '**/*.min.css','**/**.min.js' ], dest: 'temp/base/frontendvendors/bootstrap/' },
          { expand: true, cwd: 'bower_components/jquery/dist/', src: ['**/jquery.min.js' ], dest: 'temp/base/frontendvendors/jquery/' }
        ]
      },
      tempDistCopy: {
        files: [
          { src: 'source/htaccess/htaccess-dist', dest: 'temp/dist/.htaccess' }
        ]
      },
      tempStageCopy: {
        files: [
          { src: 'source/htaccess/htaccess-stage', dest: 'temp/stage/.htaccess' }
        ]
      },
      tempLocalCopy: {
        files: [
          { src: 'source/htaccess/htaccess-local', dest: 'temp/local/.htaccess' }
        ]
      }
    },

    clean:{
      tempBase: ['temp/base'],
      tempDist: ['temp/dist'],
      tempStage: ['temp/stage'],
      tempLocal: ['temp/local'],
      buildDist:['build/dist'],
      buildStage:['build/stage'],
      buildLocal:['build/local']
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

    jshint:{
      lintSource:[
        'source/js/**/*.js'
      ]
    },

    uglify:{
      options:{
        mangle:false
      },
      tempBaseUglify:{
        files:{
          'temp/base/ugly-js/app.min.js': ['temp/base/js/**/*.js']
        }
      }
    },

    cssmin: {
      options: {
        shorthandCompaction: false,
        roundingPrecision: -1
      },
      tempBaseMinify:{
        files: {
          'temp/base/mini-css/style.min.css': ['temp/base/css/*.css']
        }
      }
    }

  });

  console.log("Starter...");
  //Last grunt-moduler
  require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

  //registrer tasks
  grunt.registerTask('default', [
    'clean', 
    'copy', 
    'sass', 
    'uglify', 
    'cssmin'
  ]);
  
};
