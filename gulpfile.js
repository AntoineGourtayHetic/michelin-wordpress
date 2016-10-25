var gulp = require ('gulp'),
    uglify = require('gulp-uglify'),
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync').create(),
    imagemin = require('gulp-imagemin')
//
// // --------------  js transpiler  --------------   //
// gulp.task('script', function(){
//    gulp.src('assets/js/*.js') // select all js files in js/ folder
//         .pipe(uglify())
//         .pipe(gulp.dest('build/js/'))
//         .pipe(browserSync.stream());
// });

// --------------  scss  --------------   //
gulp.task('css', function(){
   gulp.src('assets/sass/*.scss') // select all css files in css/ folder
        .pipe(sass({outputStyle : 'compressed'}))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(gulp.dest('build/css/'))
        .pipe(browserSync.stream());
});

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
    gulp.watch('assets/js/*.js', ['script']);
    gulp.watch('assets/css/*.scss', ['css']);
    // gulp.watch('*.php').on('change', browserSync.reload);
});


// --------------  Minify and copy new images to build  --------------   //
gulp.task('imagemin', function() {
    return gulp.src('assets/img/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('build/img'))
})


// what to run when 'gulp' is entered in the terminal //
gulp.task('default', ['script', 'css', 'watch']);
