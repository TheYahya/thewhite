var gulp = require('gulp');
var sass = require('gulp-sass');
var shell = require('gulp-shell');

gulp.task('sass', function() {
  return gulp.src('./sass/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./'));
});

gulp.task('languages', function () {
  return gulp.src('./languages/*')
    .pipe(shell([
      'msgfmt -o ./languages/en_UK.mo ./languages/en_UK.po; msgfmt -o ./languages/fa_IR.mo ./languages/fa_IR.po; msgfmt -o ./languages/en_US.mo ./languages/en_US.po'
    ]));
});

gulp.task('watch', function() {
  gulp.watch('./sass/*', ['sass']).addListener;
  gulp.watch('./languages/*', ['languages']).addListener;
});