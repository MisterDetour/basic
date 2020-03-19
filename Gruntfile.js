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
			bootstrap: {
		        options: {
					style: 'compressed'
		        },
		        files: {
		            'bootstrap/bootstrap.min.css': 'bootstrap/bootstrap.scss'
		        }
			},
			theme: {
		        options: {
		            style: 'compressed'
		        },
		        files: {
		            'css/style.css': 'css/sass/style.scss'
		        }
			},
		},
		postcss: {
			options: {
				processors: [
					require('autoprefixer')()
				]
			},
			bootstrap: {
				src: 'bootstrap/bootstrap.min.css',
				dest: 'bootstrap/bootstrap.min.css'
			},
			theme: {
				src: 'css/style.css',
				dest: 'css/style.css'
			},
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
			    tasks: ['sass:theme', 'postcss:theme'],
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

	grunt.registerTask('default', ['imagemin', 'sass:theme', 'postcss:theme', 'watch']);

	grunt.registerTask('bootstrap', ['sass:bootstrap', 'postcss:bootstrap']);

};