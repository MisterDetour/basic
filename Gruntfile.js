module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		imagemin: {
		    dynamic: {
		        files: [{
		            expand: true,
		            cwd: 'images/',
		            src: ['**/*.{png,jpg,gif}'],
								dest: 'images/' 
		        }]
		    }
		},
		sass: {
		    dist: {
		        options: {
		            style: 'compressed'
		        },
		        files: {
		            'css/style.css': 'css/sass/style.scss'
		        }
		    } 
		},
		postcss: {
			options: {
				processors: [
					require('autoprefixer')()
				]
			},
			dist: {
				src: 'style.css',
				dest: 'style.css'
			}
		},
		jshint: {
	      all: [
	        'Gruntfile.js',
	        'js/*.js'
	      ]
	    },
		watch: {
			options: {
		        livereload: true,
		    },
			css: {
			    files: ['css/sass/*.scss'],
			    tasks: ['sass', 'postcss'],
			    options: {
			        spawn: false,
			    }
			},
			js: {
				files: '<%= jshint.all %>',
				tasks: ['jshint']
			}
		}
	});

	require('load-grunt-tasks')(grunt);

	grunt.registerTask('default', ['imagemin', 'sass', 'postcss', 'watch']);

};