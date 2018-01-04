var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var sourcemaps = require('gulp-sourcemaps');
var serve = require('gulp-serve');
var php  = require('gulp-connect-php');
var cleanCSS = require('gulp-clean-css');
var concat = require('gulp-concat');

var reload = browserSync.reload;

gulp.task('styles', function () {    
  gulp.src('./assets/scss/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(cleanCSS())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./assets/css'))
    .pipe(browserSync.reload({stream: true}));
});

gulp.task('scripts', function() {
  gulp.src('./assets/js/plugin/**/*.js')
    .pipe(concat('all.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./dist/'))
});

gulp.task('serve', function() {
  php.server({}, function (){
    browserSync.init({
      proxy: '127.0.0.1:8000',
      port: 3800,
      open: true,
      notify: true
    });
  });

  gulp.watch('./assets/scss/**/*.scss', ['styles']);
  gulp.watch('**/*.php').on('change', function () {
    browserSync.reload();
  });
});

gulp.task('default', ['styles', 'scripts', 'serve']);