var webpack           = require('webpack');
var path              = require('path');
var ExtractTextPlugin = require('extract-text-webpack-plugin');


module.exports = {
    entry: {
        Materializer: "./scripts/src/materializer-entry.js"
    },
    output: {
        path: "./scripts/dist",
        filename: "[name]-bundle.js"
    },
    resolve: {
        alias: {
            jquery: path.join(__dirname, "./node_modules/jquery"),
            materialjs: path.join(__dirname, "./node_modules/materialize-css/bin/materialize.js"),
            materialize: path.join(__dirname, "./node_modules/materialize-css/bin/materialize.css")
        }
    },
    resolveLoader: {
        modulesDirectories: [
            './scripts/src/node_modules'
        ]
    },
    module: {
        loaders: [
            {
                test: /\.jsx?$/,
                exclude: [/vendor\//, /node_modules\//],
                loader: 'babel?stage=0'
            },
            {
                test: /\.css$/,
                loader: ExtractTextPlugin.extract("style-loader", "css-loader")
            },
            {
                test: /\.scss$/,
                loader: ExtractTextPlugin.extract("style-loader", "css-loader!sass-loader")
            },
            { test: /\.woff(\?v=\d+\.\d+\.\d+)?$/,  loader: "file?name=/fonts/[name].[ext]" },
            { test: /\.woff2(\?v=\d+\.\d+\.\d+)?$/, loader: "file?name=/fonts/[name].[ext]" },
            { test: /\.ttf(\?v=\d+\.\d+\.\d+)?$/,   loader: "file?name=/fonts/[name].[ext]" },
            { test: /\.eot(\?v=\d+\.\d+\.\d+)?$/,   loader: "file?name=/fonts/[name].[ext]" },
            { test: /\.svg(\?v=\d+\.\d+\.\d+)?$/,   loader: "file?name=/fonts/[name].[ext]" }
        ]
    },
    plugins: [
        new ExtractTextPlugin('[name]-bundle.css'),
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery",
            "window.$": "jquery",
            "materialjs": "Materialize",
            "window.jQuery": "jquery"
        })
    ]
};
