'use strict';

/**
 * raum3 gulpfile - Version Dec 2017 - Bootstrap4 ready -
 */

const gulp          = require('gulp');
const sass          = require('gulp-sass');
const watch         = require('gulp-watch');
const concat        = require('gulp-concat');
const autoprefixer  = require('autoprefixer');
const postcss       = require('gulp-postcss');
const flexbugsfixes = require('postcss-flexbugs-fixes');
const cleanCss      = require('gulp-clean-css');
const livereload    = require('gulp-livereload');
const uglify        = require('gulp-uglify');
const babel 		= require('gulp-babel');


const processors = [
    flexbugsfixes,
    autoprefixer({
        browsers: ['last 2 versions','> 0.1%']
    })
];

const paths = {
    scss: 'src/scss/**/*.scss',
    php: '**/*.php',
    scripts_backend: 'src/js/backend/*.js',
    scripts_frontend: 'src/js/frontend/*.js'
};

gulp.task('sass',() =>{
    gulp.src('src/scss/main.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('cwos_styles.css'))
        .pipe(postcss(processors))
        .pipe(cleanCss({compatibility: 'ie8'}))
        .pipe(gulp.dest('assets/admin_css'))
});

gulp.task('compress_backend', () => {
    gulp.src(paths.scripts_backend)
        .pipe(concat('cwos-main.js'))
		.pipe(babel({presets: ['env']}))
        .pipe(uglify())
        .pipe(gulp.dest('assets/admin_js'))
});

gulp.task('compress_frontend', () => {
    gulp.src(paths.scripts_frontend)
        .pipe(concat('cwos-frontend.js'))
		.pipe(babel({presets: ['env']}))
        .pipe(uglify())
        .pipe(gulp.dest('assets/frontend_js'))
});


gulp.task('watch', () => {
    livereload({start: true});
    gulp.watch(paths.scss, ['sass']);
    gulp.watch(paths.scripts_backend, ['scripts_backend']);
    gulp.watch(paths.scripts_frontend, ['compress_frontend']);
    gulp.src(paths.php).pipe(watch(paths.php)).pipe(livereload());
    gulp.src(['assets/**/*.js','assets/**/*.css']).pipe(watch(['assets/**/*.js','assets/**/*.css'])).pipe(livereload());
});

gulp.task('default', ['sass', 'compress_backend', 'compress_frontend']);
