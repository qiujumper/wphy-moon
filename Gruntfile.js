module.exports = function(grunt) {
  require('jit-grunt')(grunt);
  
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-concat-css');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-sass');
  //var ROOT_PATH = require('path').resolve();
  var ROOT_PATH = 'http://localhost/uuuu';
  var DIST_PATH = 'http://localhost/uuuu/dist';
  var PUBLIC_PATH = 'http://localhost/uuuu/public';

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'), 
    sass: {                              // Task
      dist: {                            // Target
        options: {                       // Target options
          style: 'expanded',
          lineNumbers:true
        },
        files: {
          'style.css': 'sass/style.scss'
        }
      }
    },

    uglify: {
      my_target: {
        options: {
          beautify: true
        },
        files: {
          'dist/js/script.min.js': ['public/js/jquery.min.js','public/js/**/*.js']
        }
      }
    },

    concat_css: {
      options: {
        // Task-specific options go here. 
      },
      all: {
        src: ["dist/css/**/*.css"],
        dest: "dist/style.min.css"
      },
    },


    copy: {
      main: {
        files: [
          // includes files within path
          {expand: true, cwd: 'public/image/', src: ['**/*'], dest: 'dist/image', filter: 'isFile'},
          {expand: true, cwd: 'public/fonts/', src: ['**/*'], dest: 'dist/fonts', filter: 'isFile'},
          {expand: true, cwd: 'public/css/', src: ['**/*'], dest: 'dist/css', filter: 'isFile'},
        ],
      },
    },


    watch: {
      options: {
        livereload: true,
      },
      styles: {
        files: ['sass/**/*.scss','**/*.php','js/**/*.js'], // which files to watch
        tasks: ['sass'],
        options: {
          nospawn: true
        }
      }
    }
  });

  grunt.registerTask('default', ['watch','uglify','sass']);
};