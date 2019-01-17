var gulp  = require('gulp');
var sass  = require('gulp-sass');
var shell = require('gulp-shell');

// Compiling sass files
gulp.task('sass', function() {
  return gulp.src('./sass/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./'));
});

// Make binary files for languages
gulp.task('languages', function () {
  return gulp.src('./languages/*')
    .pipe(shell([
      'msgfmt -o ./languages/en_UK.mo ./languages/en_UK.po; msgfmt -o ./languages/fa_IR.mo ./languages/fa_IR.po; msgfmt -o ./languages/en_US.mo ./languages/en_US.po'
    ]));
});

// gulp watchers
gulp.task('default', function() {
  gulp.watch('./sass/*', gulp.parallel(['sass'])).addListener;
  gulp.watch('./languages/*', gulp.parallel(['languages'])).addListener;
});