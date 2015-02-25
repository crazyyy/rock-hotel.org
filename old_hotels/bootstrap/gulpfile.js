'use strict';
// generated on 2014-09-05 using generator-gulp-bootstrap 0.0.4

var gulp = require('gulp');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var gutil = require('gulp-util');

// load plugins
var $ = require('gulp-load-plugins')();

gulp.task('styles', function () {
    return gulp.src('wp-rock/css/main.scss')
        .pipe($.sass({errLogToConsole: true}))
        .pipe($.autoprefixer('last 1 version'))
        .pipe(gulp.dest('wp-rock/css'))
        .pipe(reload({stream:true}))
        .pipe($.size())
        .pipe($.notify("Compilation complete."));;
});

gulp.task('scripts', function () {
    return gulp.src('wp-rock/scripts/**/*.js')
        .pipe($.jshint())
        .pipe($.jshint.reporter(require('jshint-stylish')))
        .pipe($.size());
});

gulp.task('html', ['styles', 'scripts'], function () {
    var jsFilter = $.filter('**/*.js');
    var cssFilter = $.filter('**/*.css');

    return gulp.src('wp-rock/*.php')
        .pipe($.useref.assets())
        .pipe(jsFilter)
        .pipe($.uglify())
        .pipe(jsFilter.restore())
        .pipe(cssFilter)
        .pipe($.csso())
        .pipe(cssFilter.restore())
        .pipe($.useref.restore())
        .pipe($.useref())
        .pipe(gulp.dest('dist'))
        .pipe($.size());
});

gulp.task('images', function () {
    return gulp.src('wp-rock/img/**/*')
        .pipe($.cache($.imagemin({
            optimizationLevel: 3,
            progressive: true,
            interlaced: true
        })))
        .pipe(gulp.dest('dist/img'))
        .pipe(reload({stream:true, once:true}))
        .pipe($.size());
});

gulp.task('fonts', function () {
    var streamqueue = require('streamqueue');
    return streamqueue({objectMode: true},
        $.bowerFiles(),
        gulp.src('wp-rock/fonts/**/*')
    )
        .pipe($.filter('**/*.{eot,svg,ttf,woff}'))
        .pipe($.flatten())
        .pipe(gulp.dest('dist/fonts'))
        .pipe($.size());
});

gulp.task('clean', function () {
    return gulp.src(['wp-rock/css/main.css', 'dist'], { read: false }).pipe($.clean());
});

gulp.task('build', ['html', 'images', 'fonts']);

gulp.task('default', ['clean'], function () {
    gulp.start('build');
});

gulp.task('serve', ['styles'], function () {
    browserSync.init(null, {
        server: {
            baseDir: 'wp-rock',
            directory: true
        },
        debugInfo: false,
        open: false,
        hostnameSuffix: ".xip.io"
    }, function (err, bs) {
        require('opn')(bs.options.url);
        console.log('Started connect web server on ' + bs.options.url);
    });
});

// inject bower components
gulp.task('wiredep', function () {
    var wiredep = require('wiredep').stream;
    gulp.src('wp-rock/css/*.scss')
        .pipe(wiredep({
            directory: 'wp-rock/bower_components'
        }))
        .pipe(gulp.dest('wp-rock/css'));
    gulp.src('wp-rock/*.php')
        .pipe(wiredep({
            directory: 'wp-rock/bower_components',
            exclude: ['bootstrap-sass-official']
        }))
        .pipe(gulp.dest('wp-rock'));
});

gulp.task('watch', /* ['serve'], */ function () {
 
    // watch for changes
    gulp.watch(['wp-rock/*.php'], reload);
 
    gulp.watch('wp-rock/css/**/*.scss', ['styles']);
    gulp.watch('wp-rock/scripts/**/*.js', ['scripts']);
    gulp.watch('wp-rock/img/**/*', ['images']);
    gulp.watch('bower.json', ['wiredep']);
});
