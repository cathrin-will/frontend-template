module.exports = function(grunt) {

	grunt.initConfig({
		jshint: {
			beforeconcat: ['src/js/main.js'] // all we really want is for jshints to be turned on not to actually fail the file !
		},
		min: {
			options: {
				'report' : 'min'
			},
			files: {
				src: [ 'src/js/plugins/*.js','src/js/main.js' ],
				dest: 'dist/js/main.min.js',
				flatten: true,
				ext: '.min.js'
			}
		},
		sass: {
			options: {
				style: 'extended'
				// style: 'compressed'
				// compass: true
			},
			dist: {
				files: {
					'dist/css/style.css': 'src/sass/style.scss'
				},
			}
		},
		tinypng: {
			options: {
				apiKey: 'fzeWdn5xkPkiOXTmhRDaZ9DLvKvp7wnn',
				checkSigs: true,
				sigFile: 'src/img/file_sigs.json',
				summarize: true,
				showProgress: true,
				stopOnImageError: true
			},
			compress: {
				expand: true,
				cwd: 'src/img/',
				src: ['**/*.{jpg,png}'],
				dest: 'dist/img/'
			}
		},
		imagemin: {
			options: {
				optimizationLevel: 3,
			},
			compress: {
				expand: true,
				cwd: 'src/img/',
				src: ['**/*.{gif,svg}'],
				dest: 'dist/img/'
			}
		},
		postcss: {
			options: {
				map: true,
				processors: [
					require('autoprefixer-core')({browsers: 'last 1 version'}),
					require('csswring')
				]
			},
			files: {
				expand: true,
				cwd: 'dist/css/',
				src: ['**/*.css'],
				dest: 'dist/css/'
			}
		},
		watch: {
			scripts: {
				files: ['src/js/**/*.js'],
				tasks: ['min'],
				options: { nospawn: true }
			},
			lint: {
				files: ['src/js/main.js'], // don't need to lint plugins
				tasks: ['jshint'],
				options: { nospawn: true }
			},
			css: {
				files: ['src/sass/**/*.scss'],
				tasks: ['sass', 'postcss']
			}
		},
		copy: {
			fonts: {
				nonull: true,
				expand: true,
				cwd: 'src/fonts/',
				src: ['**'],
				dest: 'dist/fonts/'
			},
			js: {
				nonull: true,
				expand: true,
				cwd: 'src/js/vendor/',
				src: ['jquery**'],
				dest: 'dist/js/vendor/'
			},

		}
	});

	grunt.registerTask('default', ['min','sass','postcss','jshint', 'copy']); // Default task(s)
	grunt.registerTask('images', ['imagemin','tinypng']);
	grunt.registerTask('sassy', ['sass', 'postcss']);

	grunt.loadNpmTasks('grunt-yui-compressor');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-tinypng');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-copy');
};
