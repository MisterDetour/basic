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
			bulma: {
		        options: {
					style: 'compressed'
		        },
		        files: {
		            'bulma/bulma.min.css': 'bulma/bulma.scss'
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
				map: true,
				processors: [
					require('autoprefixer')()
				]
			},
			bootstrap: {
				src: 'bulma/bulma.min.css',
				dest: 'bulma/bulma.min.css'
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

	grunt.registerTask('bootstrap', ['sass:bulma', 'postcss:bulma']);

};