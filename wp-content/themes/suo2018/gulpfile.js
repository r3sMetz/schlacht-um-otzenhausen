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
    scripts: ['src/js/*.js'],
    plugins: [
    	'node_modules/jquery/dist/jquery.min.js'
    ],
    css : []
};

gulp.task('sass',() =>{
    gulp.src('src/scss/main.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('styles.css'))
        .pipe(postcss(processors))
        .pipe(cleanCss({compatibility: 'ie8'}))
        .pipe(gulp.dest('assets/css'))
});

gulp.task('compress', () => {
    gulp.src(paths.scripts)
        .pipe(concat('scripts.min.js'))
		.pipe(babel({presets: ['env']}))
        .pipe(uglify())
        .pipe(gulp.dest('assets/js'))
});


gulp.task('plugins', () =>{
    gulp.src(paths.plugins)
        .pipe(concat('plugins.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('assets/js'));
    gulp.src(paths.css)
        .pipe(concat('plugins.css'))
        .pipe(postcss(processors))
        .pipe(cleanCss({compatibility: 'ie8'}))
        .pipe(gulp.dest('assets/css'));
});




gulp.task('watch', () => {
    livereload({start: true});
    gulp.watch(paths.scss, ['sass']);
    gulp.watch(paths.scripts, ['compress']);
    gulp.src(paths.php).pipe(watch(paths.php)).pipe(livereload());
    gulp.src('assets/js/*.js').pipe(watch('assets/js/*.js')).pipe(livereload());
    gulp.src('assets/css/*.css').pipe(watch('assets/css/*.css')).pipe(livereload());
});

gulp.task('default', ['sass', 'compress', 'plugins']);
