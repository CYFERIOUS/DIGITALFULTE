
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

gulp.task('sassAcordion', function() {
    return gulp.src('scss/SpryAccordion.scss')
        .pipe(sass())
        .pipe(gulp.dest('SpryAssets'));
});


// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('scss/*.scss', ['sass','sassAcordion']);
});

// Default Task
gulp.task('default', [ 'sass','watch','sassAcordion']);
