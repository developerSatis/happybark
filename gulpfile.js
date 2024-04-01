'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();



//scss to css
function style() {
  return gulp.src('assets/scss/**/*.scss', { sourcemaps: true })
      .pipe(sass({
        // outputStyle: 'compressed'
      }).on('error', sass.logError))
      .pipe(autoprefixer('last 2 versions'))
      .pipe(gulp.dest('assets/css', { sourcemaps: '.' }))
      .pipe(browserSync.reload({stream: true}));
}
// Watch function
function watch(){
  browserSync.init({
    proxy: 'localhost/styling/documentation/index.html'
  });
  gulp.watch('assets/scss/**/*.scss', style);
  gulp.watch('html/index.html').on('change', browserSync.reload);
  gulp.watch('assets/css/**.css').on('change', browserSync.reload);
}

exports.style = style;
exports.watch = watch;

const build = gulp.series(watch);
gulp.task('default', build);
