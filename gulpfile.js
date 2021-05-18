// Include the necessary modules.
var gulp = require('gulp'),
    browserSync = require('browser-sync'),
    sass = require('gulp-sass');

// Configure Browsersync.
gulp.task('browser-sync', function() {
    var files = [
        './src/css/style.css',
        './**/*.php',
        './js/**/*.js',
    ];

    // Initialize Browsersync with a PHP server.
    browserSync.init(files, {
        proxy: "http://localhost/projetos/dppa/sensatek/"
    });
});

// Configure Sass task to run when the specified .scss files change.
// Browsersync will also reload browsers.
gulp.task('sass', function() {
	return gulp.src('./src/sass/style.scss')
		.pipe(sass().on('error', sass.logError)).pipe(sass())
		.pipe(sass({
		'outputStyle': 'compressed'
	}))
		.pipe(gulp.dest('./src/css/'))
		.pipe(browserSync.stream());
});

// Create the default task that can be called using 'gulp'.
// The task will process sass, run browser-sync and start watching for changes.
gulp.task('default', ['sass', 'browser-sync'], function() {
    gulp.watch("./src/sass/**/*.scss", ['sass']);
})