var gulp = require('gulp'),
    browserSync = require('browser-sync'), //Asynchronous browser loading
    reload = browserSync.reload,
    autoprefixer = require('gulp-autoprefixer'), //Autoprefixing
    minifycss = require('gulp-minify-css'), // Minification CSS
    filter = require('gulp-filter'), //Enables you to work on a subset of the original files by filtering them using globbing
    uglify = require('gulp-uglify'), //Minifies JS
    imagemin = require('gulp-imagemin'), //Minifies images
    newer = require('gulp-newer'), //For passing through only those source files that are newer than corresponding destination files.
    rename = require('gulp-rename'), //Rename files
    concat = require('gulp-concat'), //Concat 2 JS files
    notify = require('gulp-notify'), //Error messages
    cmq = require('gulp-combine-media-queries'), //Combine Media queries
    runSequence = require('gulp-run-sequence'), //Run a series of dependent gulp tasks in order
    sass = require('gulp-sass'), //Convertion SCSS -> CSS
    plugins = require('gulp-load-plugins')({ camelsize: true}), //To automatically load in gulp plugins
    ignore = require('gulp-ignore'), //Helps with ignoring files/folders
    rimraf = require('gulp-rimraf'), //Helps with removing files/folders
    plumber = require('gulp-plumber'), //No stop when errors
    cache = require('gulp-cache'), //A cache proxy task for Gulp
    sourcemaps = require('gulp-sourcemaps'); //Show sourcemaps on dev

//Browser Sync
gulp.task('browser-sync', function() {
  var files = [
    '**/*.php',
    '**/*.{png,jpg,gif}'
  ];

  browserSync.init(files, {
    proxy: url,
    injectChanges: true
  });
});

//Style Task
gulp.task('styles', function() {
  return gulp.src('./app/style/*.scss')
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass({
      errLogToConsole: true,
      outputStyle: 'compact',
      precision: 10
    }))
    .pipe(sourcemaps.write({includeContent: false}))
    .pipe(sourcemaps.init({loadMpas: true}))
    .pipe(autoprefixer('last 2 version', '> 1%', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(sourcemaps.write('.'))
    .pipe(plumber.stop())
    .pipe(gulp.dest('./'))
    .pipe(filter('**/*.css'))
    .pipe(cmq())
    .pipe(reload({ stream: true }))
    .pipe(rename({ suffix: '.min'}))
    .pipe(minifycss({
      maxLineLen: 80
    }))
    .pipe(gulp.dest('./'))
    .pipe(reload({ stream: true }))
    .pipe(notify({ message: 'Styles Task Complete', onLast: true}));
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
