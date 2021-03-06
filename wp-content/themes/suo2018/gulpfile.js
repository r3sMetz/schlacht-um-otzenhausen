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
const uglify        = require('gulp-uglify');
const babel 		= require('gulp-babel');
const imagemin		= require('gulp-imagemin');
const browserSync    = require('browser-sync').create();


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
    	//'node_modules/jquery/dist/jquery.min.js',
    	//'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
    	'node_modules/vanilla-lazyload/dist/lazyload.iife.min.js',
    	'node_modules/reframe.js/dist/reframe.min.js',
    	//'node_modules/letteringjs/jquery.lettering.js',
    	//'node_modules/textillate/jquery.textillate.js'
    ],
    css : [],
    watch: ['**/*.php','assets/js/*.js','assets/css/*.css']
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
        .pipe(concat('scripts.min.v2.js'))
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


gulp.task('images',()=>{
	gulp.src('assets/img/**/*')
		.pipe(imagemin())
		.pipe(gulp.dest('assets/img'))
});




gulp.task('watch', () => {
	browserSync.init({
        proxy: "https://suo",
        notify: false
    });

    // Compressing
    gulp.watch(paths.scss, ['sass']);
    gulp.watch(paths.scripts, ['compress']);

    // Reloeading
    gulp.watch(paths.watch,browserSync.reload);
});

gulp.task('default', ['sass', 'compress', 'plugins','images']);
