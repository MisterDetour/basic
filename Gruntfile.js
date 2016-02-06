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
		            style: 'compact'
		        },
		        files: {
		            'style.css': 'css/sass/style.scss'
		        }
		    } 
		},
		jshint: {
	      all: [
	        'Gruntfile.js',
	        'js/*.js'
	      ]
	    },
	    grunticon: {
		    myIcons: {
		        files: [{
		            expand: true,
		            cwd: 'images/svg-source',
		            src: ['*.svg', '*.png'],
		            dest: "images/svg"
		        }],
		        options: {
		        	enhanceSVG: true
		        }
		    }
		},
		autoprefixer: {
			options: {
	          browsers: [
	            'last 2 versions',
	            'Explorer >= 9',
	            'Android >= 3'
	          ]
	        },
			files: {
				'style.css': 'style.css'
			}
	  	},
		watch: {
			options: {
		        livereload: true,
		    },
			css: {
			    files: ['css/sass/*.scss'],
			    tasks: ['sass', 'autoprefixer'],
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

	grunt.registerTask('default', ['imagemin', 'sass', 'grunticon', 'autoprefixer', 'watch']);

};