module.exports = function(grunt) {

	grunt.initConfig({
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
		}
	});
	// runs all image minifiers
	grunt.registerTask('images', ['imagemin','tinypng']);
	grunt.loadNpmTasks('grunt-tinypng');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
};
