
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
    return gulp.src('scss/ilustreDevices.scss')
        .pipe(sass())
        .pipe(gulp.dest('sessions/ilustre/ferchoFolio/css/'));
});

gulp.task('chinoPopo', function() {
    return gulp.src('scss/ilustreDevices.scss')
        .pipe(sass())
        .pipe(gulp.dest('sessions/ilustre/kamusFolio/css/'));
});

gulp.task('sassAcordion', function() {
    return gulp.src('scss/SpryAccordion.scss')
        .pipe(sass())
        .pipe(gulp.dest('SpryAssets'));
});


// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('scss/*.scss','sessions/ilustre/ferchoFolio/scss/*.scss'['sass','sassAcordion','sassIlustre','chinoPopo']);
});

// Default Task
gulp.task('default', [ 'sass','watch','sassAcordion','sassIlustre','chinoPopo']);
