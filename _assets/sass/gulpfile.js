/*
SASS COMPILER 
[](https://www.npmjs.com/package/gulp-sass)
*/

'use strict';

const { src, dest } = require('gulp');
const compileSass = require('gulp-sass')(require('sass'));

// compileSass.compiler = require('node-sass');

const bundleSass = () => {
    return src('./static/sass/**/*.scss')
    .pipe(compileSass().on('error', compileSass.logError))
    .pipe(dest('./dist/static/css/'));
}

exports.bundleSass = bundleSass;