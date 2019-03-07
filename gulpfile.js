var gulp = require('gulp');
var watch = require('gulp-watch');
var postCss = require('gulp-postcss');
var autoPrefixer = require('autoprefixer');
var cssVars = require('postcss-simple-vars');
var nested = require('postcss-nested');

gulp.task('default', function() {

});

gulp.task('watch', function() {
    watch('./resources/views/home.blade.php', function() {
    });
})