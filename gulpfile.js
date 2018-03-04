
// Include gulp
var gulp = require('gulp'); 

// Include Our Plugins
var sass = require('gulp-sass');

// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src('scss/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('css'));
});

gulp.task('sassIlustre', function() {
    return gulp.src('scss/mainKamus.scss')
        .pipe(sass())
        .pipe(gulp.dest('sessions/ilustre/kamusFolio/css'));
});


// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('scss/*.scss', ['sass','sassIlustre']);
});

// Default Task
gulp.task('default', [ 'sass','watch','sassIlustre']);
