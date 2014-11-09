var
    gulp         = require('gulp'),
    concat       = require('gulp-concat'),
    notify       = require('gulp-notify'),
    rename       = require('gulp-rename'),
    minifycss    = require('gulp-minify-css'),
    imagemin     = require('gulp-imagemin'),
    del          = require('del'),
    autoprefixer = require('gulp-autoprefixer'),
    jshint       = require('gulp-jshint'),
    uglify       = require('gulp-uglify')
;

gulp.task('styles', function() {
    return gulp.src('app/Resources/assets/css/**/*.css')
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
        .pipe(concat('main.css'))
        .pipe(rename({suffix: '.min'}))
        .pipe(minifycss())
        .pipe(gulp.dest('web/css'))
        .pipe(notify('Styles task completed.'));
});

gulp.task('scripts', function() {
    return gulp.src('app/Resources/assets/js/**/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'))
        .pipe(concat('main.js'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest('web/js'))
        .pipe(notify('Scripts task completed.'));
});

gulp.task('images', function() {
    return gulp.src('app/Resources/assets/images/**/*')
        .pipe(imagemin({optimizationLevel: 3, progressive: true, interlaced: true}))
        .pipe(gulp.dest('web/img'))
        .pipe(notify('Images task completed.'));
});

gulp.task('watch', function() {
    gulp.watch('app/Resources/assets/css/**/*.css', ['styles']);
    gulp.watch('app/Resources/assets/js/**/*.js', ['scripts']);
    gulp.watch('app/Resources/assets/images/**/*', ['images']);
});

gulp.task('clean', function(cb) {
    del(['web/css', 'web/js', 'web/img'], cb);
});

gulp.task('install', ['clean'], function() {
    gulp.start('styles', 'scripts', 'images');
});
