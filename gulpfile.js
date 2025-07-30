const gulp = require("gulp");
const rename = require("gulp-rename");
const webpackStream = require("webpack-stream");
const webpack = require("webpack");
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("gulp-autoprefixer");
const cleanCSS = require("gulp-clean-css");
const clean = require("gulp-clean");

function buildJs() {
    return gulp
        .src("resources/js/script.js")
        .pipe(
            webpackStream({
                mode: "development",
                plugins: [
                    new webpack.ProvidePlugin({
                        $: "jquery",
                        jQuery: "jquery",
                    }),
                ],
                watch: true,
                output: {
                    filename: "script.min.js",
                    clean: true,
                },
                devtool: "source-map",
                module: {
                    rules: [
                        {
                            test: /\.m?js$/,
                            exclude: /(node_modules|bower_components)/,
                            use: {
                                loader: "babel-loader",
                                options: {
                                    presets: [
                                        [
                                            "@babel/preset-env",
                                            {
                                                debug: true,
                                                corejs: 3,
                                                useBuiltIns: "usage",
                                            },
                                        ],
                                    ],
                                },
                            },
                        },
                        {
                            test: /\.css$/i,
                            use: ["style-loader", "css-loader"],
                        },
                    ],
                },
            })
        )
        .pipe(gulp.dest("public/js"));
}

function buildDashboardJs() {
    return gulp
        .src("resources/js/dashboard/main.js")
        .pipe(
            webpackStream({
                mode: "development",
                watch: true,
                output: {
                    filename: "script.min.js",
                    clean: true,
                },
                devtool: "source-map",
                module: {
                    rules: [
                        {
                            test: /\.m?js$/,
                            exclude: /(node_modules|bower_components)/,
                            use: {
                                loader: "babel-loader",
                                options: {
                                    presets: [
                                        [
                                            "@babel/preset-env",
                                            {
                                                debug: true,
                                                corejs: 3,
                                                useBuiltIns: "usage",
                                            },
                                        ],
                                    ],
                                },
                            },
                        },
                        {
                            test: /\.css$/i,
                            use: ["style-loader", "css-loader"],
                        },
                    ],
                },
            })
        )
        .pipe(gulp.dest("public/js/dashboard"));
}

function css() {
    return gulp
        .src("resources/sass/style.scss")
        .pipe(
            sass({
                outputStyle: "compressed",
            }).on("error", sass.logError)
        )
        .pipe(
            rename({
                suffix: ".min",
                basename: "css",
            })
        )
        .pipe(autoprefixer())
        .pipe(cleanCSS())
        .pipe(gulp.dest("public/css"));
}

function buildDashboardStyles() {
    return gulp
        .src("resources/sass/editor/service-editor.scss")
        .pipe(
            sass({
                outputStyle: "compressed",
            }).on("error", sass.logError)
        )
        .pipe(
            rename({
                suffix: ".min",
                basename: "style",
            })
        )
        .pipe(autoprefixer())
        .pipe(cleanCSS())
        .pipe(gulp.dest("public/css/editor"));
}

function cleanDir(glob) {
    return gulp.src(glob).pipe(clean());
}

function production() {
    return gulp
        .src("resources/js/script.js")
        .pipe(
            webpackStream({
                mode: "production",
                output: {
                    filename: "script.min.js",
                    clean: true,
                },
                plugins: [
                    new webpack.ProvidePlugin({
                        $: "jquery",
                        jQuery: "jquery",
                    }),
                ],
                watch: false,
                module: {
                    rules: [
                        {
                            test: /\.m?js$/,
                            exclude: /(node_modules|bower_components)/,
                            use: {
                                loader: "babel-loader",
                                options: {
                                    presets: [
                                        [
                                            "@babel/preset-env",
                                            {
                                                debug: true,
                                                corejs: 3,
                                                useBuiltIns: "usage",
                                            },
                                        ],
                                    ],
                                },
                            },
                        },
                        {
                            test: /\.css$/i,
                            use: ["style-loader", "css-loader"],
                        },
                    ],
                },
            })
        )
        .pipe(gulp.dest("public/js"));
}

function productionDashboard() {
    return gulp
        .src("resources/js/dashboard/main.js")
        .pipe(
            webpackStream({
                mode: "production",
                watch: false,
                output: {
                    filename: "script.min.js",
                    clean: true,
                },
                module: {
                    rules: [
                        {
                            test: /\.m?js$/,
                            exclude: /(node_modules|bower_components)/,
                            use: {
                                loader: "babel-loader",
                                options: {
                                    presets: [
                                        [
                                            "@babel/preset-env",
                                            {
                                                debug: true,
                                                corejs: 3,
                                                useBuiltIns: "usage",
                                            },
                                        ],
                                    ],
                                },
                            },
                        },
                        {
                            test: /\.css$/i,
                            use: ["style-loader", "css-loader"],
                        },
                    ],
                },
            })
        )
        .pipe(gulp.dest("public/js/dashboard"));
}

exports.production = gulp.series(() => cleanDir("public/js/*.*"), production);
exports.dashboardProd = gulp.series(
    () => cleanDir("public/js/dashboard/*.*"),
    productionDashboard
);
exports.dashboard = function () {
    gulp.watch(
        [
            "resources/js/dashboard/**/*.js",
            "!resources/js/dashboard/media/**/*.js",
        ],
        buildDashboardJs
    );
};
exports.dashboardStyles = function () {
    gulp.watch(
        [
            "resources/sass/editor/service-editor.scss",
            "!resources/sass/blocks/*.*",
            "!resources/sass/base/*.*",
            "!resources/sass/libs/*.*",
            "!resources/sass/style.scss",
        ],
        buildDashboardStyles
    );
};
exports.default = function () {
    gulp.watch("resources/sass/**/*.scss", css);
    gulp.watch(
        ["resources/js/**/*.js", "!resources/js/dashboard/**/*.js"],
        buildJs
    );
};
