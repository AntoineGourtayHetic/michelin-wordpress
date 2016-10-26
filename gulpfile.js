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

<<<<<<< HEAD
// // --------------  html move  --------------   //
// gulp.task('php', function(){
//    gulp.src('*.php')
//         .pipe(gulp.dest('build/'))
//         .pipe(browserSync.stream());
// });

// --------------  watch changes  --------------   //
gulp.task('watch', function(){
    browserSync.init({
        server : {
            baseDir : 'build'
        }
    })
    gulp.watch('*.php', ['php']);
    // gulp.watch('assets/js/*.js', ['script']);
    gulp.watch('assets/sass/*.scss', ['css']);
    // gulp.watch('*.php').on('change', browserSync.reload);
});


// --------------  Minify and copy new images to build  --------------   //
gulp.task('imagemin', function() {
    return gulp.src('assets/img/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('build/img'))
})


// what to run when 'gulp' is entered in the terminal //
gulp.task('default', ['css', 'watch']);
=======
// Default task to be run with `gulp`
gulp.task('default', ['sass', 'browser-sync'], function () {
    gulp.watch("assets/sass/**/*.scss", ['sass']);
});
>>>>>>> 6a55fb97163b4e3003ef9bee44b8016561c4cdfa
