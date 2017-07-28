var gulp = require('gulp'),
    rename = require('gulp-rename'), //Rename files
    sass = require('gulp-sass'), //Convertion SCSS -> CSS
    minifycss = require('gulp-minify-css'), // Minification CSS
    plumber = require('gulp-plumber'), //No stop when errors
    uglify = require('gulp-uglify'); //Minification JS

//SCSS Task
gulp.task('css', function() {
  return gulp.src('./src/style/sass/*.scss')
    .pipe(plumber())
    .pipe(sass())
    .pipe(minifyCss())
    .pipe(gulp.dest('./src/style/'));
});

//JS Task
gulp.task('js-uglifyf', function() {
  return gulp.src('./src/js/*.js')
    .pipe(plumber())
    .pipe(rename(function(path) {
      path.basename.replace('.src', '.min');
    }))
    .pipe(uglify())
    .pipe(gulp.dest('./src/js'));
});

//Watcher
gulp.task('watch', function() {
  gulp.watch('./src/style/sass/*.scss', ['css']);
  gulp.watch('./src/js/*.js', ['js-uglify']);
});

gulp.task('default', ['watch']);
