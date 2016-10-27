var gulp        = require('gulp');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;
var sass        = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

// browser-sync task for starting the server.
gulp.task('browser-sync', function() {
    //watch files
    var files = [
    './*.css',
    './*.php'
    ];

    //initialize browsersync
    browserSync.init(files, {
    //browsersync with a php server
    proxy: "localhost:8888/hetic/h3/michelin-president/",
    notify: false
    });
});

// Sass task, will run when any SCSS files change & BrowserSync
// will auto-update browsers
gulp.task('sass', function(){
   gulp.src('assets/sass/*.scss') // select all css files in css/ folder
        .pipe(sass({outputStyle : 'compressed'}))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(gulp.dest('build/css/'))
        .pipe(reload({stream:true}));
});

// Default task to be run with `gulp`
gulp.task('default', ['sass', 'browser-sync'], function () {
    gulp.watch("assets/sass/**/*.scss", ['sass']);
});
